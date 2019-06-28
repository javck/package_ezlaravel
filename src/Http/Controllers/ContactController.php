<?php

namespace Javck\Easyweb2\Http\Controllers;

use App;
use App\Contact;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['save']]);
        // $this->middleware('role:chiefEditor,admin,editor', ['except' => ['save', 'calculFreight']]);
    }

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
        ];
        if ($request->has('fun') && $request->all()['fun'] == 'contact') {
            $rules['g-recaptcha-response'] = 'required|recaptcha';
        }
        $validator = Validator::make($request->all(), $rules);
        //dd($validator->errors()->getMessages());

        if ($validator->fails()) {
            return array('alert' => "fail", 'message' => $validator->errors()->all()[0]);
        }

        $inputs = $request->all();
        $contact = Contact::create($inputs);
        if (isset($contact)) {
            //發送Email通知給管理員
            if (setting('admin.isSendNotify') == true) {
                if (App::environment() == 'production') {
                    $beautyMail = app()->make(\Snowfire\Beautymail\Beautymail::class);
                    $beautyMail->send('emails.reminder', ['title' => '有新的聯絡單', 'contact' => $contact, 'mode' => 'contact'], function ($m) {
                        $m->from(setting('site.service_mail'), setting('site.title'));
                        $m->to(setting('admin.admin_mail'), '管理員')->subject('您有新聯絡單');
                    });
                    if (isset($contact->email)) {
                        //發送Email通知給用戶
                        $beautyMail->send('emails.notify', ['title' => trans('label.receivedContact'), 'content' => trans('label.notifyContent')], function ($m) use ($contact) {
                            $m->from(setting('site.service_mail'), Constant::site_name);
                            $m->to($contact->email, $contact->name)->subject(trans('label.receivedContact'));
                        });
                    }

                }
            }
            return array('alert' => "success", 'message' => trans('messages.contactSuccess'));
        } else {
            return array('alert' => "fail", 'message' => $validator->errors()->all()[0]);
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
