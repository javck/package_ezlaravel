<?php

// 說明:這個檔案示範如何使用Controller來輸出畫面，並抓取資料庫的資料來呈現網頁內容
// 作者:Zack Lin
// 時間:2020/10/31

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Cgy;
use App\Models\Element;
use App\Models\Contact;
use App\Models\Tag;
use App\Models\User;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;

class SiteController extends Controller
{

    protected $checkout;

    public function __construct()
    {
    }

    //示範如何簡單的將一個Blade檔案傳回到前台
    public function renderWelcomePage()
    {
        return view('welcome');
    }

    //抓取資料庫內容示範頁
    /*
    Element物件用來儲存網頁的內容，也就是將網頁的每個Row轉成一到多個elements。
    page欄位用來標明此元素屬於哪一個網頁
    position欄位是元素所在的網頁位置
    enabled欄位是紀錄該元素是否為啟用狀態
    sort欄位是用來將多個同位置的元素進行排序
    */
    //首頁
    public function renderHomePage()
    {
        $items_slider = Element::where('page', 'home')->where('position', 'slider')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $items_row1 = Element::where('page', 'home')->where('position', 'row1')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_row2_video = Element::where('page', 'home')->where('position', 'row2')->where('mode','richTxt')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_row2 = Element::where('page', 'home')->where('position', 'row2')->where('mode', 'iconTxt')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_row3_top = Element::where('page', 'home')->where('position', 'row3')->where('mode', 'txt')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_row3      = Element::where('page', 'home')->where('position', 'row3')->where('mode', 'imgText')->where('enabled', 1)->orderBy('sort', 'asc')->get();

        return view('demos.index',compact('items_slider','items_row1','item_row2_video','items_row2','item_row3_top','items_row3'));
    }

    //關於我們頁面
    public function renderAboutPage()
    {
        $item_row1      = Element::where('page', 'about')->where('position', 'row1')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_row2 = Element::where('page', 'about')->where('position', 'row2')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_row3_top = Element::where('page', 'about')->where('position', 'row3_top')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_row3 = Element::where('page', 'about')->where('position', 'row3')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_row4_top = Element::where('page', 'about')->where('position', 'row4_top')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_row4 = Element::where('page', 'about')->where('position', 'row4')->where('enabled', 1)->orderBy('sort', 'asc')->get();

        return view('demos.about',compact('item_row1','items_row2','item_row3_top','items_row3','item_row4_top','items_row4'));
    }

    //分類所有文章頁面
    public function renderCgyArticlesPage(Cgy $cgy)
    {
        $articles   = Article::where('cgy_id', $cgy->id)->where('status', 'published')->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->simplePaginate(setting('admin.articlesQty'));
        $articles_feature = Article::where('featured', true)->where('status', 'published')->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        $tags = Tag::where('enabled', 1)->where('type', 'like', '%def%')->orderBy('sort', 'asc')->get();
        $articleQty = Article::where('cgy_id', $cgy->id)->where('status', 'published')->count();
        $cgys = Cgy::where('enabled',1)->get();
        return view('demos.articles', compact('cgy','articles', 'articleQty','articles_feature','tags','cgys'));
    }

    //文章詳細頁面
    public function renderArticlePage(Article $article)
    {
        $tags = Tag::where('enabled', 1)->where('type', 'like', '%def%')->orderBy('sort', 'asc')->get();
        $cgys = Cgy::where('enabled', 1)->get();
        $articles_feature = Article::where('featured', true)->where('status', 'published')->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        return view('demos.article',compact('article','tags','cgys','articles_feature'));
    }

    //聯絡我們頁面
    public function renderContactPage()
    {
        $sources  = json_decode(setting('constant.sources'), true);
        $services = json_decode(setting('constant.services'), true);
        return view('demos.contact',compact('sources','services'));
    }

    //我們的服務頁面
    public function renderServicesPage()
    {
        $items_row1 = Element::where('page', 'services')->where('position', 'row1')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_row2_video = Element::where('page', 'services')->where('position', 'row2')->where('mode','richTxt')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_row2 = Element::where('page', 'services')->where('position', 'row2')->where('mode', 'iconTxt')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $items_row3 = Element::where('page', 'services')->where('position', 'row3')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_price_top = Element::where('page', 'services')->where('position', 'price_top')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_prices = Element::where('page', 'services')->where('position', 'prices')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        return view('demos.services', compact('items_row1','item_row2_video','items_row2','items_row3','item_price_top','items_prices'));
    }

    //作品頁面
    public function renderPortfolioPage()
    {
        $tags   = Tag::where('enabled', 1)->where('type', 'like', '%portfolio%')->orderBy('sort', 'asc')->get();
        $medias = Media::where('enabled', 1)->orderBy('sort', 'asc')->get();
        return view('demos.portfolio',compact('tags','medias'));
    }

    //作品詳細資料頁面
    public function renderPortfolioDetailPage(Media $media)
    {
        return view('demos.portfolioDetail',compact('media'));
    }

    //感謝頁
    public function renderThankPage() {
        $item_row1 = Element::where('page', 'services')->where('position', 'row1')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        return view('demos.thank',compact('item_row1'));
    }

    //政策頁
    public function renderPolicyPage() {
        return view('policy');
    }

    //最新消息頁面
    public function renderNewsPage()
    {
        Carbon::setLocale('zh-tw'); //設定Carbon的本地化
        //$top = Element::where('page','news')->where('position','top')->where('enabled',1)->first();
        $cgy_news   = Cgy::where('title', 'news')->where('enabled', true)->first();
        $articles   = Article::where('cgy_id', $cgy_news->id)->where('status', 'published')->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->simplePaginate(5);
        $articleQty = Article::where('cgy_id', $cgy_news->id)->where('status', 'published')->count();
        return view('Ezlaravel::pages.news', compact('articles', 'articleQty'));
    }

    //示範如何儲存由前台傳來的聯絡我們表單
    /**
     * 儲存前台所傳來的Contact資料，並發送Email給管理員
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        //直接在控制器進行欄位驗證
        $rules = [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'source' => 'required',
            'service' => 'required',
            'subject' => 'required|min:8',
            'message' => 'required|max:500'
        ];

        $validatedData = $request->validate($rules);

        //只取用指定欄位
        $inputs = $request->only(['name','email','subject','message','source','service']);

        $contact = Contact::create($inputs);


        if (isset($contact)) {
            if (setting('admin.isSendNotify') == true) {
                if (\App::environment() == 'production') {
                    $url = url('/admin/contacts/' . $contact->id);
                    //發送Email通知給管理員
                    Mail::send('emails.notifyContact', ['title' => '您有新的聯絡單', 'contact' => $contact, 'action' => ['title' => '前往', 'url' => $url]], function ($message) {
                        $message->to(setting('admin.admin_mail'), '管理員')->subject('您有新聯絡單');
                    });

                }
            }
            return __('Your message has been sent. Thank you!');
        } else {
            return __('Your message send failed. Please send again!');
        }

    }
}
