<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MySettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("settings")->truncate();

        DB::table("settings")->insert( [
		'id'=>1,
		'key'=>'site.title',
		'display_name'=>'網站標題',
		'value'=>'永元宮',
		'details'=>'',
		'type'=>'text',
		'order'=>1,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>2,
		'key'=>'site.description',
		'display_name'=>'網站描述',
		'value'=>'永元宮網站描述',
		'details'=>'',
		'type'=>'text',
		'order'=>2,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>3,
		'key'=>'site.logo',
		'display_name'=>'網站 Logo',
		'value'=>'settings/March2019/6joE44NpBzGQni7RCvyb.png',
		'details'=>'',
		'type'=>'image',
		'order'=>3,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>4,
		'key'=>'site.google_analytics_tracking_id',
		'display_name'=>'Google Analytics Tracking ID',
		'value'=>NULL,
		'details'=>'',
		'type'=>'text',
		'order'=>14,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>5,
		'key'=>'admin.bg_image',
		'display_name'=>'後台背景圖像',
		'value'=>'',
		'details'=>'',
		'type'=>'image',
		'order'=>5,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>6,
		'key'=>'admin.title',
		'display_name'=>'Admin 標題',
		'value'=>'Voyager',
		'details'=>'',
		'type'=>'text',
		'order'=>1,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>7,
		'key'=>'admin.description',
		'display_name'=>'後台描述',
		'value'=>'歡迎使用 Voyager - 不可錯過的 Laravel 後台管理框架',
		'details'=>'',
		'type'=>'text',
		'order'=>2,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>8,
		'key'=>'admin.loader',
		'display_name'=>'Admin Loader',
		'value'=>'',
		'details'=>'',
		'type'=>'image',
		'order'=>3,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>9,
		'key'=>'admin.icon_image',
		'display_name'=>'後台圖標',
		'value'=>'settings/March2019/LJBjXMbC7Igt3RQwwI8K.png',
		'details'=>'',
		'type'=>'image',
		'order'=>4,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>10,
		'key'=>'admin.google_analytics_client_id',
		'display_name'=>'Google Analytics Client ID （於後台控制面板使用）',
		'value'=>NULL,
		'details'=>'',
		'type'=>'text',
		'order'=>1,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>11,
		'key'=>'admin.isSendNotify',
		'display_name'=>'當收到聯絡表單是否發送通知給管理員',
		'value'=>'false',
		'details'=>'{"default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
		'type'=>'select_dropdown',
		'order'=>8,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>13,
		'key'=>'admin.isRealPath',
		'display_name'=>'下載連結是否採用真實的副檔名',
		'value'=>'true',
		'details'=>'{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
		'type'=>'select_dropdown',
		'order'=>7,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>14,
		'key'=>'admin.isShowBigPic',
		'display_name'=>'點圖片是否顯示大圖',
		'value'=>'true',
		'details'=>'{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
		'type'=>'select_dropdown',
		'order'=>6,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>15,
		'key'=>'admin.isUseComment',
		'display_name'=>'文章是否使用留言模組',
		'value'=>'false',
		'details'=>'{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
		'type'=>'select_dropdown',
		'order'=>9,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>16,
		'key'=>'admin.isUseShop',
		'display_name'=>'是否使用商店模組',
		'value'=>'false',
		'details'=>'{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
		'type'=>'select_dropdown',
		'order'=>10,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>18,
		'key'=>'admin.isVideoUpload',
		'display_name'=>'是否開放影片自動上傳功能',
		'value'=>'false',
		'details'=>'{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
		'type'=>'select_dropdown',
		'order'=>11,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>19,
		'key'=>'admin.articlesQty',
		'display_name'=>'文章列表頁一次呈現數量',
		'value'=>'16',
		'details'=>'{    "default":"5"}',
		'type'=>'text',
		'order'=>12,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>20,
		'key'=>'site.phone',
		'display_name'=>'電話',
		'value'=>'(04)2639-3625',
		'details'=>NULL,
		'type'=>'text',
		'order'=>15,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>21,
		'key'=>'site.mobile',
		'display_name'=>'手機號碼',
		'value'=>NULL,
		'details'=>NULL,
		'type'=>'text',
		'order'=>18,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>23,
		'key'=>'admin.admin_mail',
		'display_name'=>'管理員郵箱',
		'value'=>NULL,
		'details'=>NULL,
		'type'=>'text',
		'order'=>16,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>24,
		'key'=>'site.lineAt',
		'display_name'=>'官方Line帳號',
		'value'=>NULL,
		'details'=>NULL,
		'type'=>'text',
		'order'=>20,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>25,
		'key'=>'site.weChat',
		'display_name'=>'WeChat帳號',
		'value'=>NULL,
		'details'=>NULL,
		'type'=>'text',
		'order'=>37,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>26,
		'key'=>'site.fb_id',
		'display_name'=>'FB ID',
		'value'=>NULL,
		'details'=>NULL,
		'type'=>'text',
		'order'=>38,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>27,
		'key'=>'site.address',
		'display_name'=>'服務所在地址',
		'value'=>'435台中市台中市梧棲區中央路一段99-8號',
		'details'=>NULL,
		'type'=>'text',
		'order'=>39,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>28,
		'key'=>'constant.services',
		'display_name'=>'聯絡單所提供服務選項',
		'value'=>'{    "activity":"廟宇活動" ,    "service":"廟宇服務" ,    "others":"其他事項"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>21,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>29,
		'key'=>'constant.sources',
		'display_name'=>'流量來源選項',
		'value'=>'{    "recommend" : "親友推薦" ,    "fb" : "Facebook介紹" ,    "google" : "Google查詢" ,    "post" : "海報看板" ,    "others" : "其他"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>22,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>30,
		'key'=>'constant.pages',
		'display_name'=>'網頁頁面',
		'value'=>'{    "all" : "全部",    "home" : "首頁" ,    "about" : "關於我們" ,    "contact" : "聯絡我們",    "news" : "最新消息",    "qna" : "常見問題"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>23,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>31,
		'key'=>'constant.element_modes',
		'display_name'=>'元素模式',
		'value'=>'{    "txt" : "文字段落" ,    "iconTxt" : "Icon文字" ,    "imgText" : "圖文",    "imgBtn" : "圖片按鈕" ,    "action" : "行動請求" ,    "richTxt" : "多媒體連結" ,    "slider" : "廣告牆",    "qna" : "Q & A" ,    "iSwitch" : "資訊切換" ,    "price" : "價目"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>24,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>32,
		'key'=>'constant.lang',
		'display_name'=>'語系',
		'value'=>'{    "zh_TW" : "中文"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>25,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>33,
		'key'=>'constant.titlePoses',
		'display_name'=>'Slider Title位置',
		'value'=>'{    "botLeft" : "底部左側" ,    "botRight" : "底部右側"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>26,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>34,
		'key'=>'constant.media_types',
		'display_name'=>'媒體類型',
		'value'=>'{    "image" : "大圖展示",    "video" : "影片",    "iframe" : "網頁" ,    "gallery-item" :"藝廊"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>27,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>35,
		'key'=>'constant.article_modes',
		'display_name'=>'文章模式',
		'value'=>'{    "singleImg" : "單張圖片",    "multiImgs" : "多張圖片" ,    "puzzle" : "拼貼圖片" ,    "film" : "影片",    "sentense" : "短句",    "quote" : "格言" ,    "link":"連結"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>28,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>36,
		'key'=>'constant.order_statuses',
		'display_name'=>'訂單狀態',
		'value'=>'{    "create" : "訂單成立",    "prepare" : "備貨中" ,    "finish" : "訂單完成" ,    "cancel" : "訂單取消"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>29,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>37,
		'key'=>'constant.animStyles',
		'display_name'=>'動畫類別',
		'value'=>'{    "bounce" : "Bounce",    "flash" : "Flash",    "pulse" : "Pulse",    "rubberBand" : "RubberBand",    "shake" : "Shake",    "swing" : "Swing",    "tada" : "Tada",    "wobble" : "Wobble",    "bounceIn" : "Bounce In",    "bounceInDown" : "Bounce In Down",    "bounceInLeft" : "Bounce In Left",    "bounceInRight" : "Bounce In Right",    "bounceInUp" : "Bounce In Up",    "bounceOut" : "Bounce Out",    "bounceOutDown" : "Bounce Out Down",    "bounceOutLeft" : "Bounce Out Left",    "bounceOutRight" : "Bounce Out Right",    "bounceOutUp" : "Bounce Out Up",    "fadeIn" : "Fade In",    "fadeInDown" : "Fade In Down",    "fadeInDownBig" : "Fade In Down Big",    "fadeInLeft" : "Fade In Left",    "fadeInLeftBig" : "Fade In Left Big",    "fadeInRight" : "Fade In Right",    "fadeInRightBig" : "Fade In Right Big",    "fadeInUp" : "Fade In Up",    "fadeInUpBig" : "Fade In Up Big",    "fadeOut" : "Fade Out",    "fadeOutDown" : "Fade Out Down",    "fadeOutDownBig" : "Fade Out Down Big",    "fadeOutLeft" : "Fade Out Left",    "fadeOutLeftBig" : "Fade Out Left Big",    "fadeOutRight" : "Fade Out Right",    "fadeOutRightBig" : "Fade Out Right Big",    "fadeOutUp" : "Fade Out Up",    "fadeOutUpBig" : "Fade Out Up Big",    "flip" : "Flip",    "flipInX" : "Flip In X",    "flipInY" : "Flip In Y",    "flipOutX" : "Flip Out X",    "flipOutY" : "Flip Out Y",    "lightSpeedIn" : "Light Speed In",    "lightSpeedOut" : "Light Speed Out",    "rotateIn" : "Rotate In",    "rotateInDownLeft" : "Rotate In Down Left",    "rotateInDownRight" : "Rotate In Down Right",    "rotateInUpLeft" : "Rotate In Up Left",    "rotateInUpRight" : "Rotate In Up Right",    "rotateOut" : "Rotate Out",    "rotateOutDownLeft" : "Rotate Out Down Left",    "rotateOutDownRight" : "Rotate Out Down Right",    "rotateOutUpLeft" : "Rotate Out Up Left",    "rotateOutUpRight" : "Rotate Out Up Right",    "hinge" : "Hinge",    "rollIn" : "Roll In",    "rollOut" : "Roll Out",    "zoomIn" : "Zoom In",    "zoomInDown" : "Zoom In Down",    "zoomInLeft" : "Zoom In Left",    "zoomInRight" : "Zoom In Right",    "zoomInUp" : "Zoom In Up",    "zoomOut" : "Zoom Out",    "zoomOutDown" : "Zoom Out Down",    "zoomOutLeft" : "Zoom Out Left",    "zoomOutRight" : "Zoom Out Right",    "zoomOutUp" : "Zoom Out Up"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>30,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>38,
		'key'=>'constant.serials_type',
		'display_name'=>'序號類型',
		'value'=>'{    "multi" : "多次",    "once" : "單次"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>31,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>43,
		'key'=>'constant.pay_sources',
		'display_name'=>'付款方式',
		'value'=>'{    "line" : "Line Pay"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>34,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>44,
		'key'=>'constant.article_statuses',
		'display_name'=>'文章狀態',
		'value'=>'{    "published" : "上架中",    "draft" : "草稿",    "pending" : "待審核"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>35,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>45,
		'key'=>'constant.contact_statuses',
		'display_name'=>'聯絡單狀態',
		'value'=>'{    "unHandled" : "未處理",    "handling" : "處理中" ,    "delay" : "延遲中" ,    "isHandled" : "已完成",    "cancel" : "已取消"}',
		'details'=>NULL,
		'type'=>'code_editor',
		'order'=>36,
		'group'=>'Constant'
		] );
					
		DB::table("settings")->insert( [
		'id'=>46,
		'key'=>'site.copyright',
		'display_name'=>'版權宣告',
		'value'=>'Copyrights © 梧棲 安良港 永元宮 all rights reserved.',
		'details'=>NULL,
		'type'=>'text',
		'order'=>40,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>47,
		'key'=>'site.logo2',
		'display_name'=>'網站第2Logo',
		'value'=>'settings/March2019/M0dXCvUKJmAlG89vbTUy.png',
		'details'=>NULL,
		'type'=>'image',
		'order'=>13,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>48,
		'key'=>'site.contact_info',
		'display_name'=>'聯絡頁資訊',
		'value'=>'梧棲安良港永元宮供奉主神：\r\n\r\n		．北極玄天上帝\r\n		．三府千歲: 朱府千歲、李府千歲、池府千歲\r\n		．太子元帥、武財神、福德正神\r\n		．玄天上帝: 俗稱 上帝公，神威顯赫，帝德參天，護佑子民，福樂安康\r\n\r\n		地址: 435台中市台中市梧棲區中央路一段99-8號\r\n		電話: (04)2639-3625',
		'details'=>NULL,
		'type'=>'text_area',
		'order'=>41,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>49,
		'key'=>'site.service_mail',
		'display_name'=>'客服郵箱',
		'value'=>NULL,
		'details'=>NULL,
		'type'=>'text',
		'order'=>19,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>50,
		'key'=>'site.article_default_pic',
		'display_name'=>'預設文章圖片',
		'value'=>'images/vision.jpg',
		'details'=>NULL,
		'type'=>'text',
		'order'=>44,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>51,
		'key'=>'admin.isShowAuthor',
		'display_name'=>'文章是否顯示作者區塊',
		'value'=>'false',
		'details'=>'{    "default":"false",    "options":{        "true":"開啟",        "false":"關閉"    }}',
		'type'=>'select_dropdown',
		'order'=>42,
		'group'=>'Admin'
		] );
					
		DB::table("settings")->insert( [
		'id'=>52,
		'key'=>'site.logo@2x',
		'display_name'=>'網站 Retina Logo',
		'value'=>'',
		'details'=>NULL,
		'type'=>'image',
		'order'=>4,
		'group'=>'Site'
		] );
					
		DB::table("settings")->insert( [
		'id'=>53,
		'key'=>'site.favicon',
		'display_name'=>'網站Favicon',
		'value'=>'',
		'details'=>NULL,
		'type'=>'image',
		'order'=>43,
		'group'=>'Site'
		] );
    }
}
