<?php

namespace Javck\Easyweb2\Http\Controllers;

use App\Http\Model\BI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadImagesDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use Javck\Easyweb2\Http\Controllers\MyVoyagerBaseController;
use App\Consolidation;
use Session;

class MyVoyagerOrderController extends MyVoyagerBaseController
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //***************************************
    //               ____
    //              |  _ \
    //              | |_) |
    //              |  _ <
    //              | |_) |
    //              |____/
    //
    //      Browse our Data Type (B)READ
    //
    //****************************************

    public function index(Request $request)
    {
        // GET THE SLUG, ex. 'posts', 'pages', etc.
        $slug = $this->getSlug($request);

        // GET THE DataType based on the slug
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('browse', app($dataType->model_name));

        $getter = $dataType->server_side ? 'paginate' : 'get';

        $search = (object) ['value' => $request->get('s'), 'key' => $request->get('key'), 'filter' => $request->get('filter')];

        $searchNames = [];
        $searchable = array_keys(SchemaManager::describeTable(app($dataType->model_name)->getTable())->toArray());
        if ($dataType->server_side) {
            $dataRow = Voyager::model('DataRow')->whereDataTypeId($dataType->id)->get();
            foreach ($searchable as $key => $value) {
                if($dataRow->where('field', $value)->first() == null){
                    continue;
                }
                $displayName = $dataRow->where('field', $value)->first()->getTranslatedAttribute('display_name');
                $searchNames[$value] = $displayName ?: ucwords(str_replace('_', ' ', $value));
            }
        }

        $orderBy = $request->get('order_by', $dataType->order_column);
        $sortOrder = $request->get('sort_order', null);
        $usesSoftDeletes = false;
        $showSoftDeleted = false;
        $orderColumn = [];
        if ($orderBy) {
            $index = $dataType->browseRows->where('field', $orderBy)->keys()->first() + 1;
            $orderColumn = [[$index, 'desc']];
            if (!$sortOrder && isset($dataType->order_direction)) {
                $sortOrder = $dataType->order_direction;
                $orderColumn = [[$index, $dataType->order_direction]];
            } else {
                $orderColumn = [[$index, 'desc']];
            }
        }

        // Next Get or Paginate the actual content from the MODEL that corresponds to the slug DataType
        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);

            if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope'.ucfirst($dataType->scope))) {
                $query = $model->{$dataType->scope}();
            } else {
                $query = $model::select('*');
            }

            //確認登入者身分，如果非管理者只能看到自己的訂單
            if(!auth()->user()->hasRole('admin') && !auth()->user()->hasRole('super')){
                $query->where('owner_id',auth()->user()->id);
            }

            // Use withTrashed() if model uses SoftDeletes and if toggle is selected
            if ($model && in_array(SoftDeletes::class, class_uses($model)) && app('VoyagerAuth')->user()->can('delete', app($dataType->model_name))) {
                $usesSoftDeletes = true;

                if ($request->get('showSoftDeleted')) {
                    $showSoftDeleted = true;
                    $query = $query->withTrashed();
                }
            }

            // If a column has a relationship associated with it, we do not want to show that field
            $this->removeRelationshipField($dataType, 'browse');

            //先加入各Browse自定義過濾================================
            $inputs = $request->all();
            $querys = array();
            if(Session::has('model')){
                if(Session::get('model') == $dataType->name){
                    if(Session::has('querys')){
                        $querys = Session::get('querys');
                    }
                }else{
                    if(Session::has('querys')){
                        $old_querys = Session::get('querys');
                        Session::forget('querys');
                        foreach ($old_querys as $key =>$value) {
                            Session::forget($key);
                        }
                    }
                    Session::put('model',$dataType->name);
                }
            }else{
                Session::put('model',$dataType->name);
            }
            
            //$inputs = array_merge($inputs,$querys);
            foreach ($inputs as $key => $value) {
                if($value != 'none'){
                    $querys[$key] = $value;
                }else{
                    if(Session::has($key)){
                        Session::forget($key);
                        unset($querys[$key]);
                    }
                }
            }

            foreach ($querys as $key => $value) {
                if( !in_array($key,['key','filter','s','page','order_by','sort_order','showSoftDeleted']) ){
                    if(substr( $key, 0, 6 ) === "query_"){
                        $queryKey = str_replace("query_","",$key);
                    }else{
                        $queryKey = $key;
                    }
                    $query->where($queryKey,'like','%'.$value.'%');
                    Session::put($key, $value);
                }
            }
            //dd($querys);
            Session::put('querys', $querys);

            if ($search->key && $search->filter) {
                $theRow = Voyager::model('DataRow')->where('data_type_id', $dataType->id)->where('field', $search->key)->first();
                //加入更強大的搜尋功能
                if ($theRow->type == 'checkbox') {
                    $query->where($search->key, $search->filter === 'true');
                } else {
                    if ($search->value && $search->value != '') {
                        $search_filter = ($search->filter == 'equals') ? '=' : 'LIKE';
                        $search_value = ($search->filter == 'equals') ? $search->value : '%' . $search->value . '%';

                        if (strpos($search->key, '_id') !== false) {
                            $key = str_replace('_id', 's', $search->key);
                            $key2 = str_replace('_id', '', $search->key);
                            $theType = Voyager::model('DataRow')->where('field', 'LIKE', '%' . $key2 . '_relationship')->first();
                            $query->whereHas($key2, function ($query) use ($search_filter, $search_value, $theType) {
                                $query->where($theType->details->label, $search_filter, $search_value);
                            });
                        }else if($theRow->type == 'constant dropdown'){
                            $setting = json_decode(setting('constant.'.$theRow->details->key),true);
                            $keys = [];
                            foreach ($setting as $key => $value) {
                                if($search_filter == '='){
                                    if($value == $search->value){
                                        $keys[] = $key;
                                    }
                                }else{
                                    if(strpos($value,$search->value) !== FALSE){
                                        $keys[] = $key;
                                    }
                                }
                            }
                            $query->whereIn($search->key,$keys);
                        }else {
                            $query->where($search->key, $search_filter, $search_value);
                        }
                    } else {
                    }
                }
            }

            if ($orderBy && in_array($orderBy, $dataType->fields())) {
                $querySortOrder = (!empty($sortOrder)) ? $sortOrder : 'desc';
                $dataTypeContent = call_user_func([
                    $query->orderBy($orderBy, $querySortOrder),
                    $getter,
                ]);
            } elseif ($model->timestamps) {
                $dataTypeContent = call_user_func([$query->latest($model::CREATED_AT), $getter]);
            } else {
                $dataTypeContent = call_user_func([$query->orderBy($model->getKeyName(), 'DESC'), $getter]);
            }

            // Replace relationships' keys for labels and create READ links if a slug is provided.
            $dataTypeContent = $this->resolveRelations($dataTypeContent, $dataType);
        } else {
            // If Model doesn't exist, get data from table name
            $dataTypeContent = call_user_func([DB::table($dataType->name), $getter]);
            $model = false;
        }

        // Check if BREAD is Translatable
        if (($isModelTranslatable = is_bread_translatable($model))) {
            $dataTypeContent->load('translations');
        }

        // Check if server side pagination is enabled
        $isServerSide = isset($dataType->server_side) && $dataType->server_side;

        // Check if a default search key is set
        $defaultSearchKey = $dataType->default_search_key ?? null;

        // Actions
        $actions = [];
        if (!empty($dataTypeContent->first())) {
            foreach (Voyager::actions() as $action) {
                $action = new $action($dataType, $dataTypeContent->first());

                if ($action->shouldActionDisplayOnDataType()) {
                    $actions[] = $action;
                }
            }
        }

        $view = 'voyager::bread.browse';

        if (view()->exists("voyager::$slug.browse")) {
            $view = "voyager::$slug.browse";
        }

        return Voyager::view($view, compact(
            'actions',
            'dataType',
            'dataTypeContent',
            'isModelTranslatable',
            'search',
            'orderBy',
            'orderColumn',
            'sortOrder',
            'searchNames',
            'searchable',
            'isServerSide',
            'defaultSearchKey',
            'usesSoftDeletes',
            'showSoftDeleted'
        ));
    }

    //***************************************
    //                _____
    //               |  __ \
    //               | |__) |
    //               |  _  /
    //               | | \ \
    //               |_|  \_\
    //
    //  Read an item of our Data Type B(R)EAD
    //
    //****************************************

    // public function show(Request $request, $id)
    // {
    //     $slug = $this->getSlug($request);

    //     $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

    //     if (strlen($dataType->model_name) != 0) {
    //         $model = app($dataType->model_name);
    //         $dataTypeContent = call_user_func([$model, 'findOrFail'], $id);
    //     } else {
    //         // If Model doest exist, get data from table name
    //         $dataTypeContent = DB::table($dataType->name)->where('id', $id)->first();
    //     }

    //     // Replace relationships' keys for labels and create READ links if a slug is provided.
    //     $dataTypeContent = $this->resolveRelations($dataTypeContent, $dataType, true);

    //     // If a column has a relationship associated with it, we do not want to show that field
    //     $this->removeRelationshipField($dataType, 'read');

    //     // Check permission
    //     $this->authorize('read', $dataTypeContent);

    //     // Check if BREAD is Translatable
    //     $isModelTranslatable = is_bread_translatable($dataTypeContent);

    //     $view = 'voyager::bread.read';

    //     if (view()->exists("voyager::$slug.read")) {
    //         $view = "voyager::$slug.read";
    //     }

    //     return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    // }

    //***************************************
    //                ______
    //               |  ____|
    //               | |__
    //               |  __|
    //               | |____
    //               |______|
    //
    //  Edit an item of our Data Type BR(E)AD
    //
    //****************************************

    // public function edit(Request $request, $id)
    // {
    //     $slug = $this->getSlug($request);

    //     $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

    //     $dataTypeContent = (strlen($dataType->model_name) != 0)
    //     ? app($dataType->model_name)->findOrFail($id)
    //     : DB::table($dataType->name)->where('id', $id)->first(); // If Model doest exist, get data from table name

    //     foreach ($dataType->editRows as $key => $row) {
    //         $dataType->editRows[$key]['col_width'] = isset($row->details->width) ? $row->details->width : 100;
    //     }

    //     // If a column has a relationship associated with it, we do not want to show that field
    //     $this->removeRelationshipField($dataType, 'edit');

    //     // Check permission
    //     $this->authorize('edit', $dataTypeContent);

    //     // Check if BREAD is Translatable
    //     $isModelTranslatable = is_bread_translatable($dataTypeContent);

    //     $view = 'voyager::bread.edit-add';

    //     if (view()->exists("voyager::$slug.edit-add")) {
    //         $view = "voyager::$slug.edit-add";
    //     }

    //     return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    // }

    // POST BR(E)AD
    // public function update(Request $request, $id)
    // {
    //     $slug = $this->getSlug($request);

    //     $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

    //     // Compatibility with Model binding.
    //     $id = $id instanceof Model ? $id->{$id->getKeyName()} : $id;

    //     $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);

    //     // Check permission
    //     $this->authorize('edit', $data);

    //     // Validate fields with ajax
    //     $val = $this->validateBread($request->all(), $dataType->editRows, $dataType->name, $id);
    //     //dd($val);
    //     if ($val->fails()) {
    //         return response()->json(['errors' => $val->messages()]);
    //     }

    //     if (!$request->ajax()) {
    //         $this->insertUpdateData($request, $slug, $dataType->editRows, $data);

    //         event(new BreadDataUpdated($dataType, $data));

    //         return redirect()
    //             ->route("voyager.{$dataType->slug}.index")
    //             ->with([
    //                 'message' => __('voyager::generic.successfully_updated') . " {$dataType->display_name_singular}",
    //                 'alert-type' => 'success',
    //             ]);
    //     }
    // }

    //***************************************
    //
    //                   /\
    //                  /  \
    //                 / /\ \
    //                / ____ \
    //               /_/    \_\
    //
    //
    // Add a new item of our Data Type BRE(A)D
    //
    //****************************************

    // public function create(Request $request)
    // {
    //     $slug = $this->getSlug($request);

    //     $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

    //     // Check permission
    //     $this->authorize('add', app($dataType->model_name));

    //     $dataTypeContent = (strlen($dataType->model_name) != 0)
    //     ? new $dataType->model_name()
    //     : false;

    //     foreach ($dataType->addRows as $key => $row) {
    //         $dataType->addRows[$key]['col_width'] = isset($row->details->width) ? $row->details->width : 100;
    //     }

    //     // If a column has a relationship associated with it, we do not want to show that field
    //     $this->removeRelationshipField($dataType, 'add');

    //     // Check if BREAD is Translatable
    //     $isModelTranslatable = is_bread_translatable($dataTypeContent);

    //     $view = 'voyager::bread.edit-add';

    //     if (view()->exists("voyager::$slug.edit-add")) {
    //         $view = "voyager::$slug.edit-add";
    //     }

    //     return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    // }


    //***************************************
    //                _____
    //               |  __ \
    //               | |  | |
    //               | |  | |
    //               | |__| |
    //               |_____/
    //
    //         Delete an item BREA(D)
    //
    //****************************************
    //暫停使用，使用TCG自帶
    // public function destroy(Request $request, $id)
    // {
    //     $slug = $this->getSlug($request);

    //     $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

    //     // Check permission
    //     $this->authorize('delete', app($dataType->model_name));

    //     // Init array of IDs
    //     $ids = [];
    //     if (empty($id)) {
    //         // Bulk delete, get IDs from POST
    //         $ids = explode(',', $request->ids);
    //     } else {
    //         // Single item delete, get ID from URL
    //         $ids[] = $id;
    //     }
    //     foreach ($ids as $id) {
    //         $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);
    //         $this->cleanup($dataType, $data);
    //     }

    //     $displayName = count($ids) > 1 ? $dataType->display_name_plural : $dataType->display_name_singular;

    //     $res = $data->destroy($ids);
    //     $data = $res
    //     ? [
    //         'message' => __('voyager::generic.successfully_deleted') . " {$displayName}",
    //         'alert-type' => 'success',
    //     ]
    //     : [
    //         'message' => __('voyager::generic.error_deleting') . " {$displayName}",
    //         'alert-type' => 'error',
    //     ];

    //     if ($res) {
    //         event(new BreadDataDeleted($dataType, $data));
    //     }

    //     return redirect()->route("voyager.{$dataType->slug}.index")->with($data);
    // }

    /**
     * Order BREAD items.
     *
     * @param string $table
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    // public function order(Request $request)
    // {
    //     $slug = $this->getSlug($request);

    //     $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

    //     // Check permission
    //     $this->authorize('edit', app($dataType->model_name));

    //     if (!isset($dataType->order_column) || !isset($dataType->order_display_column)) {
    //         return redirect()
    //             ->route("voyager.{$dataType->slug}.index")
    //             ->with([
    //                 'message' => __('voyager::bread.ordering_not_set'),
    //                 'alert-type' => 'error',
    //             ]);
    //     }

    //     $model = app($dataType->model_name);
    //     $results = $model->orderBy($dataType->order_column, $dataType->order_direction)->get();

    //     $display_column = $dataType->order_display_column;

    //     $dataRow = Voyager::model('DataRow')->whereDataTypeId($dataType->id)->whereField($display_column)->first();

    //     $view = 'voyager::bread.order';

    //     if (view()->exists("voyager::$slug.order")) {
    //         $view = "voyager::$slug.order";
    //     }

    //     return Voyager::view($view, compact(
    //         'dataType',
    //         'display_column',
    //         'dataRow',
    //         'results'
    //     ));
    // }

    // public function update_order(Request $request)
    // {
    //     $slug = $this->getSlug($request);

    //     $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

    //     // Check permission
    //     $this->authorize('edit', app($dataType->model_name));

    //     $model = app($dataType->model_name);

    //     $order = json_decode($request->input('order'));
    //     $column = $dataType->order_column;
    //     foreach ($order as $key => $item) {
    //         $i = $model->findOrFail($item->id);
    //         $i->$column = ($key + 1);
    //         $i->save();
    //     }
    // }

}
