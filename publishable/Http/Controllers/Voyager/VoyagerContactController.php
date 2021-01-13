<?php

namespace App\Http\Controllers\Voyager;


use App\Models\Contact;
use App\Models\Tag;
use Illuminate\Http\Request;
use Session;
use Auth;

use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\Voyager\VoyagerBaseController;

class VoyagerContactController extends VoyagerBaseController
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'save']);
        //$this->middleware('adminOnly'); 改用voyager內建permission
    }

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

    public function edit(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);

            // Use withTrashed() if model uses SoftDeletes and if toggle is selected
            if ($model && in_array(SoftDeletes::class, class_uses($model))) {
                $model = $model->withTrashed();
            }
            if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope' . ucfirst($dataType->scope))) {
                $model = $model->{$dataType->scope}();
            }
            $dataTypeContent = call_user_func([$model, 'findOrFail'], $id);
        } else {
            // If Model doest exist, get data from table name
            $dataTypeContent = DB::table($dataType->name)->where('id', $id)->first();
        }

        foreach ($dataType->editRows as $key => $row) {
            $dataType->editRows[$key]['col_width'] = isset($row->details->width) ? $row->details->width : 100;
        }

        // If a column has a relationship associated with it, we do not want to show that field
        $this->removeRelationshipField($dataType, 'edit');

        // Check permission
        $this->authorize('edit', $dataTypeContent);

        // Check if BREAD is Translatable
        $isModelTranslatable = is_bread_translatable($dataTypeContent);

        $view = 'voyager::bread.edit-add';

        if (view()->exists("voyager::$slug.edit-add")) {
            $view = "voyager::$slug.edit-add";
        }

        //將處理者指定為登入者
        $dataTypeContent->handler_id = Auth::user()->id;

        return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    }

    //============================================================================================================



    /**
     * 儲存前台所傳來的Contact資料，並發送Email給管理員
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        //dd($request->all());
        $rules = [
            'name' => 'required|max:20',
            'mobile' => 'required|max:20',
            'email' => 'required|max:100',
            'service' => 'max:20',
            'subject' => 'required|max:100',
            'message' => 'max:500',
            'source' => 'max:20',
            'g-recaptcha-response' => 'required|captcha',
        ];

        $validatedData = $request->validate($rules);

        $inputs = $request->except(['g-recaptcha-response', 'submit']);
        $contact = Contact::create($inputs);
        if (isset($contact)) {

            if (setting('Ezlaravel::admin.isSendNotify') == true) {
                if (App::environment() == 'production') {
                    $url = url('/admin/contacts/' . $contact->id);
                    //發送Email通知給管理員
                    Mail::send('Ezlaravel::emails.notifyContact', ['title' => '您有新的聯絡單', 'contact' => $contact, 'action' => ['title' => '前往', 'url' => $url]], function ($message) {
                        $message->to(setting('admin.admin_mail'), '管理員')->subject('您有新聯絡單');
                    });

                    if (isset($contact->email)) {
                        //發送Email通知給用戶
                        Mail::send('emails.simple', ['title' => trans('label.receivedContact'), 'content' => trans('label.notifyContent'), 'action' => ['title' => '前往官網', 'url' => url('/')]], function ($message) use ($contact) {
                            $message->to($contact->email, $contact->name)->subject(trans('label.receivedContact'));
                        });
                    }
                }
            }
            return redirect('thank');
        } else {
            return abort(404);
        }
    }

    //服務已完成，將該聯絡資訊標註為已完成
    public function serviceDone(Request $request, $id)
    {
        $contact = Contact::find($id);
        if (isset($contact)) {
            $contact->isHandled = true;
            $contact->save();
            $request->session()->flash('success', '聯絡單已完成!');
        }
        return redirect('admin/contacts');
    }

    //封存該聯絡資訊，將IsEnabled設為false
    public function serviceSeal(Request $request, $id)
    {
        $contact = Contact::find($id);
        if (isset($contact)) {
            $contact->enabled = false;
            $contact->save();
            $request->session()->flash('success', '封存聯絡單成功!');
        }
        return redirect('admin/contacts');
    }
}
