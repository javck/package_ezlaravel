<?php

namespace App\Http\Controllers;

use App\Article;
use App\Element;
use App\User;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;

class SiteController extends Controller
{

    protected $checkout;

    public function __construct()
    {

    }

    //首頁
    public function renderHomePage()
    {
        //如果有指定頁面，轉址到指定頁面
        if (Session::has('from')) {
            $from = Session::get('from');
            Session::forget('from');
            return redirect($from);
        }

        $services = json_decode(setting('constant.services'), true);
        $tags_shop = Tag::where('type', 'shop')->where('enabled', true)->orderBy('sort', 'asc')->limit(3)->get();

        //首頁
        $items_slider = Element::where('page', 'home')->where('position', 'slider')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_slider_top = Element::where('page', 'home')->where('position', 'slider_top')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $item_spec_pageTop = Element::where('page', 'home')->where('position', 'spec_top')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_spec = Element::where('page', 'home')->where('position', 'spec')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_aboutUs = Element::where('page', 'home')->where('position', 'aboutUs')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $item_subscribe = Element::where('page', 'home')->where('position', 'subscribe')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $item_prices_pageTop = Element::where('page', 'home')->where('position', 'prices_pageTop')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_prices = Element::where('page', 'home')->where('position', 'prices')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $items_fullChar = Element::where('page', 'home')->where('position', 'fullChars')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_callActionSubscribe = Element::where('page', 'home')->where('position', 'callActionSubscribe')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $cities = json_decode( setting('constant.cities') , true);
        $warehouses = json_decode( setting('constant.warehouses') , true);
        $delivers = json_decode( setting('constant.delivers') , true);

        return view('index', compact('items_slider', 'items_spec', 'item_spec_pageTop', 'item_aboutUs', 'tags_shop', 'item_subscribe', 'items_fullChar', 'item_callActionSubscribe', 'item_prices_pageTop', 'items_prices', 'item_slider_top',
            'warehouses', 'cities', 'delivers'));
    }

    //Q&A頁面
    public function renderQnaPage()
    {
        //$q_modes = Constant::$q_modes;
        $tags = Tag::where('enabled',1)->where('type','like','%qna%')->orderBy('sort','asc')->pluck('title','id');
        $items_row1 = Element::where('page','qna')->where('position','row1')->where('enabled',1)->orderBy('sort','asc')->get();
        $item_callAction = Element::where('page','all')->where('position','callAction')->where('enabled',1)->orderBy('sort','asc')->first();
        return view('easyweb2::pages.qna',compact('tags','items_row1','item_callAction'));
    }

    //分類所有文章頁面
    public function renderCgyArticlesPage($cgy_id)
    {
        $articles = Article::where('cgy_id', $cgy_id)->where('status', 'published')->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->simplePaginate(setting('admin.articlesQty'));
        $articleQty = Article::where('cgy_id', $cgy_id)->where('status', 'published')->count();
        return view('easyweb2::pages.news', compact('articles', 'articleQty'));
    }

    //聯絡我們頁面
    public function renderContactUsPage()
    {
        $services = $services = json_decode(setting('constant.services'), true);
        $item_row1_right = Element::where('page', 'all')->where('position', 'contact_info')->where('enabled', 1)->first();
        $sources = json_decode(setting('constant.sources'), true);
        $pageView = 'contactPageView';
        return view('easyweb2::pages.contact', compact('services', 'item_row1_right', 'sources', 'pageView'));
    }

    //關於我們
    public function renderVisionPage()
    {
        $item_top = Element::where('page', 'vision')->where('position', 'top')->where('enabled', 1)->first();
        $items_slider = Element::where('page', 'vision')->where('position', 'slider')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_content = Element::where('page', 'vision')->where('position', 'content')->where('enabled', 1)->first();
        $pageView = 'VisionPageView';
        return view('easyweb2::pages.about.vision', compact('item_content', 'item_top', 'items_slider', 'pageView'));
    }

    //商店頁面
    public function renderShopPage()
    {
        //選擇所有預設的商品
        $cgies = Cgy::where('parent_id',1)->where('enabled',true)->orderBy('sort','asc')->get();
        $cgy_ids = Cgy::where('parent_id',1)->where('enabled',true)->pluck('id');
        $items = Item::whereIn('cgy_id',$cgy_ids)->get();
        $item_partner_pageTop = Element::where('page','home')->where('position','partner_top')->where('enabled',1)->orderBy('sort','asc')->first();
        $items_partner = Element::where('page','home')->where('position','partner')->where('enabled',1)->orderBy('sort','asc')->get();
        return view('easyweb2::pages.filter_shop',compact('cgies','items','item_partner_pageTop','items_partner'));
    }

    //最新消息頁面
    public function renderNewsPage()
    {
        Carbon::setLocale('zh-tw'); //設定Carbon的本地化
        //$top = Element::where('page','news')->where('position','top')->where('enabled',1)->first();
        $cgy_news = Cgy::where('title','最新消息')->where('enabled',true)->first();
        $articles = Article::where('cgy_id',$cgy_news->id)->where('status','published')->orderBy('sort','asc')->orderBy('created_at','desc')->simplePaginate(5);
        $articleQty = Article::where('cgy_id',$cgy_news->id)->where('status','published')->count();
        return view('easyweb2::pages.news',compact('articles','articleQty'));
    }

    //金流相關函式================================================================

    //建立金流單視圖
    public function createPaymentOrderPage(Request $request, $order_id)
    {
        $order = Order::findOrFail($order_id);
        if($order->getOriginal('status') != 'created'){
            return '此訂單不需付款';
        }

        $payment = setting('admin.payMethod');
        $name = setting('site.title') . '訂單編號:' . $order_id;
        $desc = "";
        $quantity = 0;
        $user_id = 0;
        if (isset($order->owner)) {
            $user_id = $order->owner->id;
        }
        if ($order->getOriginal('type') == 'item') {
            $items = $order->items;
            foreach ($items as $item) {
                if (strlen($desc) > 0) {
                    $desc = $desc . ',';
                }
                $desc = $desc . $item->title . $item->pivot->qty . '個';
                $quantity = $quantity + 1;
            }
        } else if ($order->getOriginal('type') == 'consolidation') {
            $items = Consolidation::where('order_id', $order_id)->get();
            $quantity = $items->count();
            foreach ($items as $consolidation) {
                if (strlen($desc) > 0) {
                    $desc = $desc . ',';
                }
                $desc = $desc . $consolidation->name . $consolidation->qty . '個';
            }
        }

        $amount = $order->subtotal + $order->shipCost;
        $url = null;
        return view('easyweb2::pages.payment.createOrder', compact('order', 'payment', 'name', 'quantity', 'desc', 'amount', 'url', 'user_id', 'items'));
    }

    //建立金流訂單
    public function createPaymentOrder(Request $request)
    {
        $inputs = $request->all();
        $name = $inputs['name'];
        $quantity = $inputs['quantity'];
        $amount = $inputs['amount'];
        $desc = $inputs['desc'];
        $payment = $inputs['payment'];
        $order_id = $inputs['order_id'];
        $url = $inputs['url'];
        $user_id = $inputs['user_id'];
        if ($payment == 'AllPay') {
            PaymentUtil::createAllPayOrder($request, $name, $quantity, $amount, $desc, $order_id, $url, $user_id);
        }else{
            $formData = [
                'UserId' => $user_id, // 用戶ID , Optional
                'ItemDescription' => $desc,
                'ItemName' => $name,
                'TotalAmount' => $amount,
                'PaymentMethod' => 'ALL' // ALL, Credit, ATM, WebATM
            ];    
            return $this->checkout->setPostData($formData)->send();
        }

    }

    //寄發請求付款信件或簡訊
    public function paymentRequest(Request $request)
    {
        $order = Order::findOrFail($request->all()['order_id']);
        $user = User::findOrFail($order->owner_id);
        $url = url('payment/create_allpay/' . $order->id);
        $content = '親愛的客戶您好，' . setting('site.title') . '通知您訂單編號' . $order->id . '需要付款，連結為: ' . $url . ' ，如已完成付款請無須理會。';
        $content_sms = str_replace(" ", "+", $content);
        //發送簡訊通知
        if (setting('admin.isSendSMS') == 'true') {
            $resultCode = (int)app('smsking')->sendSMS($content_sms, $user->mobile);
            if($resultCode < 0){
                $errorMsg = app('smsking')->smgTransStatusCode($resultCode);
                return redirect()->back()
                ->with([
                    'message'    => '簡訊發送失敗!原因為：'. $errorMsg,
                    'alert-type' => 'error',
                ]);
            }
        }
        //發送Email通知
        if (isset($user->email)) {
            //發送Email通知給用戶
            $subject = setting('site.title') . '訂單付款通知';

            Mail::send('easyweb2::emails.simple', ['title' => $subject , 'content' => $content , 'action' => ['title' => '前往付款' , 'url' => $url]], function($message) use($user, $subject)
            {
                $message->to($user->email, $user->name)->subject($subject);
            });
        }
        return redirect()
        ->back()
        ->with([
            'message'    => '請求付款簡訊發送成功!',
            'alert-type' => 'success',
        ]);
    }


}
