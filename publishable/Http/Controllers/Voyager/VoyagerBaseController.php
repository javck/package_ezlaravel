<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerBaseController as BaseVoyagerBaseController;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Database\Schema\SchemaManager;
use Session;
use Auth;
class VoyagerBaseController extends BaseVoyagerBaseController
{
    public function insertUpdateData($request, $slug, $rows, $data)
    {
        $multi_select = [];
        // Pass $rows so that we avoid checking unused fields
        $request->attributes->add(['breadRows' => $rows->pluck('field')->toArray()]);

        /*
         * Prepare Translations and Transform data
         */
        $translations = is_bread_translatable($data)
            ? $data->prepareTranslations($request)
            : [];

        foreach ($rows as $row) {
            // if the field for this row is absent from the request, continue
            // checkboxes will be absent when unchecked, thus they are the exception
            if (!$request->hasFile($row->field) && !$request->has($row->field) && $row->type !== 'checkbox') {
                // if the field is a belongsToMany relationship, don't remove it
                // if no content is provided, that means the relationships need to be removed
                if (isset($row->details->type) && $row->details->type !== 'belongsToMany') {
                    continue;
                }
            }

            // Value is saved from $row->details->column row
            // if ($row->type == 'relationship' && $row->details->type == 'belongsTo') {
            //     continue;
            // }

            $content = $this->getContentBasedOnType($request, $slug, $row, $row->details);

            if ($row->type == 'relationship' && $row->details->type != 'belongsToMany') {
                $row->field = @$row->details->column;
            }

            /*
             * merge ex_images/files and upload images/files
             */
            if (in_array($row->type, ['multiple_images', 'file']) && !is_null($content)) {
                if (isset($data->{$row->field})) {
                    $ex_files = json_decode($data->{$row->field}, true);
                    if (!is_null($ex_files)) {
                        $content = json_encode(array_merge($ex_files, json_decode($content)));
                    }
                }
            }

            if (is_null($content)) {

                // If the image upload is null and it has a current image keep the current image
                if ($row->type == 'image' && is_null($request->input($row->field)) && isset($data->{$row->field})) {
                    $content = $data->{$row->field};
                }

                // If the multiple_images upload is null and it has a current image keep the current image
                if ($row->type == 'multiple_images' && is_null($request->input($row->field)) && isset($data->{$row->field})) {
                    $content = $data->{$row->field};
                }

                // If the file upload is null and it has a current file keep the current file
                if ($row->type == 'file') {
                    $content = $data->{$row->field};
                    if (!$content) {
                        $content = json_encode([]);
                    }
                }

                if ($row->type == 'password') {
                    $content = $data->{$row->field};
                }
            }

            if ($row->type == 'relationship' && $row->details->type == 'belongsToMany') {
                // Only if select_multiple is working with a relationship
                $multi_select[] = [
                    'model'           => $row->details->model,
                    'content'         => $content,
                    'table'           => $row->details->pivot_table,
                    'foreignPivotKey' => $row->details->foreign_pivot_key ?? null,
                    'relatedPivotKey' => $row->details->related_pivot_key ?? null,
                    'parentKey'       => $row->details->parent_key ?? null,
                    'relatedKey'      => $row->details->key,
                ];
            } else {
                $data->{$row->field} = $content;
            }
        }

        if (isset($data->additional_attributes)) {
            foreach ($data->additional_attributes as $attr) {
                if ($request->has($attr)) {
                    $data->{$attr} = $request->{$attr};
                }
            }
        }
        $data->save();

        // Save translations
        if (count($translations) > 0) {
            $data->saveTranslations($translations);
        }

        foreach ($multi_select as $sync_data) {
            $data->belongsToMany(
                $sync_data['model'],
                $sync_data['table'],
                $sync_data['foreignPivotKey'],
                $sync_data['relatedPivotKey'],
                $sync_data['parentKey'],
                $sync_data['relatedKey']
            )->sync($sync_data['content']);
        }

        // Rename folders for newly created data through media-picker
        if ($request->session()->has($slug . '_path') || $request->session()->has($slug . '_uuid')) {
            $old_path = $request->session()->get($slug . '_path');
            $uuid = $request->session()->get($slug . '_uuid');
            $new_path = str_replace($uuid, $data->getKey(), $old_path);
            $folder_path = substr($old_path, 0, strpos($old_path, $uuid)) . $uuid;

            $rows->where('type', 'media_picker')->each(function ($row) use ($data, $uuid) {
                $data->{$row->field} = str_replace($uuid, $data->getKey(), $data->{$row->field});
            });
            $data->save();
            if ($old_path != $new_path && !Storage::disk(config('voyager.storage.disk'))->exists($new_path)) {
                $request->session()->forget([$slug . '_path', $slug . '_uuid']);
                Storage::disk(config('voyager.storage.disk'))->move($old_path, $new_path);
                Storage::disk(config('voyager.storage.disk'))->deleteDirectory($folder_path);
            }
        }

        return $data;
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
        if ($dataType->server_side) {
            $searchable = SchemaManager::describeTable(app($dataType->model_name)->getTable())->pluck('name')->toArray();
            $dataRow = Voyager::model('DataRow')->whereDataTypeId($dataType->id)->get();
            foreach ($searchable as $key => $value) {
                $field = $dataRow->where('field', $value)->first();
                $displayName = ucwords(str_replace('_', ' ', $value));
                if ($field !== null) {
                    $displayName = $field->getTranslatedAttribute('display_name');
                }
                $searchNames[$value] = $displayName;
            }
        }else{
            $searchable = null;
        }

        $orderBy = $request->get('order_by', $dataType->order_column);
        $sortOrder = $request->get('sort_order', $dataType->order_direction);
        $usesSoftDeletes = false;
        $showSoftDeleted = false;

        // Next Get or Paginate the actual content from the MODEL that corresponds to the slug DataType
        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);

            if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope' . ucfirst($dataType->scope))) {
                $query = $model->{$dataType->scope}();
            } else {
                $query = $model::select('*');
            }

            // Use withTrashed() if model uses SoftDeletes and if toggle is selected
            if ($model && in_array(SoftDeletes::class, class_uses_recursive($model)) && Auth::user()->can('delete', app($dataType->model_name))) {
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
            if (Session::has('model')) {
                if (Session::get('model') == $dataType->name) {
                    if (Session::has('querys')) {
                        $querys = Session::get('querys');
                    }
                } else {
                    if (Session::has('querys')) {
                        $old_querys = Session::get('querys');
                        Session::forget('querys');
                        foreach ($old_querys as $key => $value) {
                            Session::forget($key);
                        }
                    }
                    Session::put('model', $dataType->name);
                }
            } else {
                Session::put('model', $dataType->name);
            }

            //$inputs = array_merge($inputs,$querys);
            foreach ($inputs as $key => $value) {
                if ($value != 'none') {
                    $querys[$key] = $value;
                } else {
                    if (Session::has($key)) {
                        Session::forget($key);
                        unset($querys[$key]);
                    }
                }
            }

            foreach ($querys as $key => $value) {
                if (!in_array($key, ['key', 'filter', 's', 'page', 'order_by', 'sort_order', 'showSoftDeleted'])) {
                    if (substr($key, 0, 6) === "query_") {
                        $queryKey = str_replace("query_", "", $key);
                    } else {
                        $queryKey = $key;
                    }
                    $query->where($queryKey, $value);
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
                        } else if ($theRow->type == 'constant dropdown') {
                            $setting = json_decode(setting('constant.' . $theRow->details->key), true);
                            $keys = [];
                            foreach ($setting as $key => $value) {
                                if ($search_filter == '=') {
                                    if ($value == $search->value) {
                                        $keys[] = $key;
                                    }
                                } else {
                                    if (strpos($value, $search->value) !== FALSE) {
                                        $keys[] = $key;
                                    }
                                }
                            }
                            $query->whereIn($search->key, $keys);
                        } else {
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
        $isModelTranslatable = is_bread_translatable($model);

        // Eagerload Relations
        $this->eagerLoadRelations($dataTypeContent, $dataType, 'browse', $isModelTranslatable);

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

        // Define showCheckboxColumn
        $showCheckboxColumn = false;
        if (Auth::user()->can('delete', app($dataType->model_name))) {
            $showCheckboxColumn = true;
        } else {
            foreach ($actions as $action) {
                if (method_exists($action, 'massAction')) {
                    $showCheckboxColumn = true;
                }
            }
        }

        // Define orderColumn
        $orderColumn = [];
        if ($orderBy) {
            $index = $dataType->browseRows->where('field', $orderBy)->keys()->first() + ($showCheckboxColumn ? 1 : 0);
            $orderColumn = [[$index, $sortOrder ?? 'desc']];
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
            'showSoftDeleted',
            'showCheckboxColumn'
        ));
    }

    public function reset($model)
    {
        $querys = Session::get('querys');
        $keys   = array_keys($querys);
        foreach ($keys as $key) {
            Session::forget($keys);
        }
        Session::forget('querys');
        return redirect('admin/' . $model);
    }

}
