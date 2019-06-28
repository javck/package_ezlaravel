<?php

namespace Javck\Easyweb2\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadImagesDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use Auth;
use App;
use App\User;
use Javck\Easyweb2\Controllers\MyVoyagerBaseController;

class ConsolidationController extends MyVoyagerBaseController
{
    use BreadRelationshipParser;

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
        $searchable = $dataType->server_side ? array_keys(SchemaManager::describeTable(app($dataType->model_name)->getTable())->toArray()) : '';
        $orderBy = $request->get('order_by', $dataType->order_column);
        $sortOrder = $request->get('sort_order', null);
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
            $query = $model::select('*');

            //確認登入者身分，如果非管理者只能看到自己的集運單
            if(!auth()->user()->hasRole('admin') && !auth()->user()->hasRole('super')){
                $query->where('user_id',auth()->user()->id);
            }

            // If a column has a relationship associated with it, we do not want to show that field
            $this->removeRelationshipField($dataType, 'browse');

            if ($search->value && $search->key && $search->filter) {
                $search_filter = ($search->filter == 'equals') ? '=' : 'LIKE';
                $search_value = ($search->filter == 'equals') ? $search->value : '%'.$search->value.'%';
                if($search->key != 'user_id'){
                    $query->where($search->key, $search_filter, $search_value);
                }else{
                    $query->whereHas('user', function ($query) use ($search_filter, $search_value){
                        $query->where('name', $search_filter, $search_value);
                    });
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
        $defaultSearchKey = isset($dataType->default_search_key) ? $dataType->default_search_key : null;

        $view = 'voyager::bread.browse';

        if (view()->exists("voyager::$slug.browse")) {
            $view = "voyager::$slug.browse";
        }

        return Voyager::view($view, compact(
            'dataType',
            'dataTypeContent',
            'isModelTranslatable',
            'search',
            'orderBy',
            'orderColumn',
            'sortOrder',
            'searchable',
            'isServerSide',
            'defaultSearchKey'
        ));
    }

    // POST BR(E)AD
    public function update(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Compatibility with Model binding.
        $id = $id instanceof Model ? $id->{$id->getKeyName()} : $id;

        $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);

        // Check permission
        $this->authorize('edit', $data);

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->editRows, $dataType->name, $id);

        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()]);
        }

        if (!$request->ajax()) {
            $originalStatus = $data['status'];
            $data = $this->insertUpdateData($request, $slug, $dataType->editRows, $data);
            $data->subtotal = $data->qty * $data->price;
            $data->save();
            

            //如果集運單狀態改為已受理created，需要通知該用戶
            if($request->all()['status'] == 'created' && $originalStatus != 'created'){
                $user = User::findOrFail($data['user_id']);
                if(isset($user->email) && App::environment() != 'production'){
                    $beautyMail = app()->make(\Snowfire\Beautymail\Beautymail::class);
                    $title = '集運單編號' . $data['id'] . '已受理';
                    $content = '親愛的客戶您好，金剛網通知您集運單編號為' . $data['id'] . '，商品名稱為' . $data['name'] . '已受理!';
                    $beautyMail->send('emails.notify', ['title' => $title,'content' => $content], function ($m) use ($user,$title) {
                        $m->from(setting('site.service_mail'), setting('site.title') );
                        $m->to($user->email, $user->name)->subject($title);
                    });
                }
            }

            event(new BreadDataUpdated($dataType, $data));

            return redirect()
                ->route("voyager.{$dataType->slug}.index")
                ->with([
                    'message'    => __('voyager::generic.successfully_updated')." {$dataType->display_name_singular}",
                    'alert-type' => 'success',
                ]);
        }
    }

    /**
     * POST BRE(A)D - Store data.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows);

        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()]);
        }

        $model = new $dataType->model_name();
        $model->user_id = Auth::user()->id;

        if (!$request->has('_validate')) {
            $data = $this->insertUpdateData($request, $slug, $dataType->addRows, $model);
            $data->subtotal = $request->all()['qty'] * $request->all()['price'];
            $data->save();

            //發信通知使用者已建立集運單
            if (App::environment() == 'production') {
                $beautyMail = app()->make(\Snowfire\Beautymail\Beautymail::class);
                if(isset(Auth::user()->email)){
                    $content = '多謝您填寫集運申請單，我們將在三天內審核完成後與您聯繫...';
                    $beautyMail->send('emails.notify', ['title' => '集運單已經建立','content' => $content], function ($m) {
                        $m->from(setting('site.service_mail'), setting('site.title') );
                        $m->to(Auth::user()->email, Auth::user()->name)->subject('集運單已經建立');
                    });
                }
                
                //發送Email通知管理員
                if (setting('admin.isSendNotify') == true){
                    $content = '已收到'. Auth::user()->name . '送出的集運單';
                    $beautyMail->send('emails.notify', ['title' => '已收到新集運單','content' => $content], function ($m) {
                        $m->from(setting('site.service_mail'), setting('site.title') );
                        $m->to(setting('admin.admin_mail'), '管理員')->subject('已收到'. Auth::user()->name . '的集運申請單');
                    });
                }

            }

            event(new BreadDataAdded($dataType, $data));

            if ($request->ajax()) {
                return response()->json(['success' => true, 'data' => $data]);
            }

            return redirect()
                ->route("voyager.{$dataType->slug}.index")
                ->with([
                        'message'    => __('voyager::generic.successfully_added_new')." {$dataType->display_name_singular}",
                        'alert-type' => 'success',
                    ]);
        }
    }

}
