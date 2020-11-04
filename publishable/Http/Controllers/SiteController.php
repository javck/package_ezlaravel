<?php

// 說明:這個檔案示範如何使用Controller來輸出畫面，並抓取資料庫的資料來呈現網頁內容
// 作者:Zack Lin
// 時間:2020/10/31

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Cgy;
use App\Models\Element;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{

    protected $checkout;

    public function __construct()
    {

    }

    //抓取資料庫內容示範頁
    /*
 Element物件用來儲存網頁的內容，也就是將網頁的每個Row轉成一到多個elements。
 page欄位用來標明此元素屬於哪一個網頁
 position欄位是元素所在的網頁位置
 enabled欄位是紀錄該元素是否為啟用狀態
 sort欄位是用來將多個同位置的元素進行排序
 */
    public function renderDemoPage()
    {
        $item_slider  = Element::where('page', 'demo')->where('position', 'slider')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $item_why_top = Element::where('page', 'demo')->where('position', 'why_top')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_why    = Element::where('page', 'demo')->where('position', 'why')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_row1    = Element::where('page', 'demo')->where('position', 'row1')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $item_row2    = Element::where('page', 'demo')->where('position', 'row2')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $item_row3    = Element::where('page', 'demo')->where('position', 'row3')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_prices = Element::where('page', 'demo')->where('position', 'prices')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $items_qna    = Element::where('page', 'demo')->where('position', 'qna')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_row4           = Element::where('page', 'demo')->where('position', 'row4')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_row5          = Element::where('page', 'demo')->where('position', 'row5')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_gallery_top    = Element::where('page', 'demo')->where('position', 'gallery_top')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_gallery       = Element::where('page', 'demo')->where('position', 'gallery')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_how_top        = Element::where('page', 'demo')->where('position', 'how_top')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $items_how           = Element::where('page', 'demo')->where('position', 'how')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_call_to_action = Element::where('page', 'demo')->where('position', 'call_to_action')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        $item_media          = Element::where('page', 'demo')->where('position', 'media')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        return view('demo', compact('item_slider', 'item_row1', 'item_row2', 'item_row3', 'items_prices', 'items_qna', 'item_row4', 'items_row5', 'items_gallery', 'item_gallery_top', 'item_why_top', 'items_why', 'item_how_top', 'items_how', 'item_call_to_action', 'item_media'));
    }

    //首頁
    public function renderHomePage()
    {
        return view('welcome');
    }

    //Q&A頁面
    public function renderQnaPage()
    {
        //$q_modes = Constant::$q_modes;
        $tags            = Tag::where('enabled', 1)->where('type', 'like', '%qna%')->orderBy('sort', 'asc')->pluck('title', 'id');
        $items_row1      = Element::where('page', 'qna')->where('position', 'row1')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_callAction = Element::where('page', 'all')->where('position', 'callAction')->where('enabled', 1)->orderBy('sort', 'asc')->first();
        return view('Ezlaravel::pages.qna', compact('tags', 'items_row1', 'item_callAction'));
    }

    //分類所有文章頁面
    public function renderCgyArticlesPage($cgy_id)
    {
        $articles   = Article::where('cgy_id', $cgy_id)->where('status', 'published')->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->simplePaginate(setting('admin.articlesQty'));
        $articleQty = Article::where('cgy_id', $cgy_id)->where('status', 'published')->count();
        return view('Ezlaravel::pages.news', compact('articles', 'articleQty'));
    }

    //聯絡我們頁面
    public function renderContactUsPage()
    {
        $item_row1_right = Element::where('page', 'contact')->where('position', 'contact_info')->where('enabled', 1)->first();
        $sources         = json_decode(setting('constant.sources'), true);
        $services        = json_decode(setting('constant.services'), true);
        return view('contact', compact('services', 'item_row1_right', 'sources'));
    }

    //關於我們
    public function renderVisionPage()
    {
        $item_top     = Element::where('page', 'vision')->where('position', 'top')->where('enabled', 1)->first();
        $items_slider = Element::where('page', 'vision')->where('position', 'slider')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $item_content = Element::where('page', 'vision')->where('position', 'content')->where('enabled', 1)->first();
        $pageView     = 'VisionPageView';
        return view('Ezlaravel::pages.about.vision', compact('item_content', 'item_top', 'items_slider', 'pageView'));
    }

    //商店示範頁面
    public function renderShopPage()
    {
        return view('shop');
    }

    //感謝頁
    public function renderThankPage() {
        return view('Ezlaravel::pages.thankyou');
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
}
