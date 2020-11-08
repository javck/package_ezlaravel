<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;


class MySettingSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        Setting::truncate();

        Setting::create([
            'id' => 1,
            'key' => 'site.title',
            'display_name' => '網站標題',
            'value' => 'Ezlaravel',
            'details' => '',
            'type' => 'text',
            'order' => 1,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 2,
            'key' => 'site.description',
            'display_name' => '網站描述',
            'value' => 'Ezlaravel，幫助您快速入門Laravel + Voyager極速開發術',
            'details' => '',
            'type' => 'text',
            'order' => 2,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 3,
            'key' => 'site.logo',
            'display_name' => '網站 Logo',
            'value' => 'settings/November2020/R5tIJJliJKnPunbYTCif.png',
            'details' => '',
            'type' => 'image',
            'order' => 3,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 4,
            'key' => 'site.google_analytics_tracking_id',
            'display_name' => 'Google Analytics Tracking ID',
            'value' => NULL,
            'details' => '',
            'type' => 'text',
            'order' => 18,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 5,
            'key' => 'admin.bg_image',
            'display_name' => '後台背景圖像',
            'value' => '',
            'details' => '',
            'type' => 'image',
            'order' => 5,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 6,
            'key' => 'admin.title',
            'display_name' => 'Admin 標題',
            'value' => 'Ezlaravel',
            'details' => '',
            'type' => 'text',
            'order' => 1,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 7,
            'key' => 'admin.description',
            'display_name' => '後台描述',
            'value' => '歡迎使用Ezlaravel - 最簡便的Laravel + Voyager極速開發術',
            'details' => '',
            'type' => 'text',
            'order' => 2,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 8,
            'key' => 'admin.loader',
            'display_name' => 'Admin Loader',
            'value' => '',
            'details' => '',
            'type' => 'image',
            'order' => 3,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 9,
            'key' => 'admin.icon_image',
            'display_name' => '後台圖標',
            'value' => 'settings/November2020/z2Gx0AMO7jQe1THJBjeL.png',
            'details' => '',
            'type' => 'image',
            'order' => 4,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 10,
            'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID （於後台控制面板使用）',
            'value' => NULL,
            'details' => '',
            'type' => 'text',
            'order' => 1,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 11,
            'key' => 'admin.isSendNotify',
            'display_name' => '當收到聯絡表單是否發送通知給管理員',
            'value' => 'true',
            'details' => '{"default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
            'type' => 'select_dropdown',
            'order' => 8,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 13,
            'key' => 'admin.isRealPath',
            'display_name' => '下載連結是否採用真實的副檔名',
            'value' => 'true',
            'details' => '{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
            'type' => 'select_dropdown',
            'order' => 7,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 14,
            'key' => 'admin.isShowBigPic',
            'display_name' => '點圖片是否顯示大圖',
            'value' => 'true',
            'details' => '{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
            'type' => 'select_dropdown',
            'order' => 6,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 15,
            'key' => 'admin.isUseComment',
            'display_name' => '文章是否使用留言模組',
            'value' => 'false',
            'details' => '{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
            'type' => 'select_dropdown',
            'order' => 9,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 16,
            'key' => 'admin.isUseShop',
            'display_name' => '是否使用商店模組',
            'value' => 'false',
            'details' => '{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
            'type' => 'select_dropdown',
            'order' => 10,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 18,
            'key' => 'admin.isVideoUpload',
            'display_name' => '是否開放影片自動上傳功能',
            'value' => 'false',
            'details' => '{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
            'type' => 'select_dropdown',
            'order' => 11,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 19,
            'key' => 'admin.articlesQty',
            'display_name' => '文章列表頁一次呈現數量',
            'value' => '16',
            'details' => '{    "default":"5"}',
            'type' => 'text',
            'order' => 12,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 20,
            'key' => 'site.phone',
            'display_name' => '電話',
            'value' => '(02)82752408',
            'details' => NULL,
            'type' => 'text',
            'order' => 19,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 21,
            'key' => 'site.mobile',
            'display_name' => '手機號碼',
            'value' => '0939287209',
            'details' => NULL,
            'type' => 'text',
            'order' => 20,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 23,
            'key' => 'admin.admin_mail',
            'display_name' => '管理員郵箱',
            'value' => 'info@goblinlab.org',
            'details' => NULL,
            'type' => 'text',
            'order' => 16,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 24,
            'key' => 'site.lineAt',
            'display_name' => '官方Line帳號',
            'value' => NULL,
            'details' => NULL,
            'type' => 'text',
            'order' => 38,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 25,
            'key' => 'site.weChat',
            'display_name' => 'WeChat帳號',
            'value' => NULL,
            'details' => NULL,
            'type' => 'text',
            'order' => 39,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 26,
            'key' => 'site.fb_id',
            'display_name' => 'FB ID',
            'value' => 'goblinlab',
            'details' => NULL,
            'type' => 'text',
            'order' => 40,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 27,
            'key' => 'site.address',
            'display_name' => '服務所在地址',
            'value' => '220 新北市板橋區大觀路二段146-4號3F',
            'details' => NULL,
            'type' => 'text',
            'order' => 41,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 28,
            'key' => 'constant.services',
            'display_name' => '聯絡單所提供服務選項',
            'value' => '{
 "service":"產品服務" ,
 "others":"其他事項"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 21,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 29,
            'key' => 'constant.sources',
            'display_name' => '流量來源選項',
            'value' => '{
 "recommend" : "親友推薦" ,
 "fb" : "Facebook介紹" ,
 "google" : "Google查詢" ,
 "post" : "海報看板" ,
 "others" : "其他"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 22,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 30,
            'key' => 'constant.pages',
            'display_name' => '網頁頁面',
            'value' => '{
 "all" : "全部",
 "demo" : "展示頁",
 "home" : "首頁" ,
 "about" : "關於我們" ,
 "thank" : "感謝頁",
 "portfolio" : "作品集",
 "contact" : "聯絡我們",
 "news" : "最新消息",
 "services" : "提供服務"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 23,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 31,
            'key' => 'constant.element_modes',
            'display_name' => '元素模式',
            'value' => '{
 "txt" : "文字段落" ,
 "iconTxt" : "Icon文字" ,
 "imgText" : "圖文",
 "imgBtn" : "圖片按鈕" ,
 "action" : "行動請求" ,
 "richTxt" : "多媒體連結" ,
 "slider" : "廣告牆",
 "qna" : "Q & A" ,
 "iSwitch" : "資訊切換" ,
 "price" : "價目"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 24,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 32,
            'key' => 'constant.lang',
            'display_name' => '語系',
            'value' => '{    "zh_TW" : "中文"}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 25,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 33,
            'key' => 'constant.titlePoses',
            'display_name' => 'Slider Title位置',
            'value' => '{
 "botLeft" : "底部左側" ,
 "botRight" : "底部右側"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 26,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 34,
            'key' => 'constant.media_types',
            'display_name' => '媒體類型',
            'value' => '{
 "image" : "大圖展示",
 "video" : "影片",
 "web" : "網頁" ,
 "gallery-item" : "藝廊"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 27,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 35,
            'key' => 'constant.article_modes',
            'display_name' => '文章模式',
            'value' => '{
 "singleImg" : "單張圖片",
 "multiImgs" : "多張圖片" ,
 "puzzle" : "拼貼圖片" ,
 "film" : "影片",
 "sentense" : "短句",
 "quote" : "格言" ,
 "link":"連結"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 28,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 36,
            'key' => 'constant.order_statuses',
            'display_name' => '訂單狀態',
            'value' => '{
 "created" : "訂單成立",
 "prepare" : "備貨中" ,
 "finish" : "訂單完成" ,
 "cancel" : "訂單取消"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 29,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 37,
            'key' => 'constant.animStyles',
            'display_name' => '動畫類別',
            'value' => '{
 "bounce" : "Bounce",
 "flash" : "Flash",
 "pulse" : "Pulse",
 "rubberBand" : "RubberBand",
 "shake" : "Shake",
 "swing" : "Swing",
 "tada" : "Tada",
 "wobble" : "Wobble",
 "bounceIn" : "Bounce In",
 "bounceInDown" : "Bounce In Down",
 "bounceInLeft" : "Bounce In Left",
 "bounceInRight" : "Bounce In Right",
 "bounceInUp" : "Bounce In Up",
 "bounceOut" : "Bounce Out",
 "bounceOutDown" : "Bounce Out Down",
 "bounceOutLeft" : "Bounce Out Left",
 "bounceOutRight" : "Bounce Out Right",
 "bounceOutUp" : "Bounce Out Up",
 "fadeIn" : "Fade In",
 "fadeInDown" : "Fade In Down",
 "fadeInDownBig" : "Fade In Down Big",
 "fadeInLeft" : "Fade In Left",
 "fadeInLeftBig" : "Fade In Left Big",
 "fadeInRight" : "Fade In Right",
 "fadeInRightBig" : "Fade In Right Big",
 "fadeInUp" : "Fade In Up",
 "fadeInUpBig" : "Fade In Up Big",
 "fadeOut" : "Fade Out",
 "fadeOutDown" : "Fade Out Down",
 "fadeOutDownBig" : "Fade Out Down Big",
 "fadeOutLeft" : "Fade Out Left",
 "fadeOutLeftBig" : "Fade Out Left Big",
 "fadeOutRight" : "Fade Out Right",
 "fadeOutRightBig" : "Fade Out Right Big",
 "fadeOutUp" : "Fade Out Up",
 "fadeOutUpBig" : "Fade Out Up Big",
 "flip" : "Flip",
 "flipInX" : "Flip In X",
 "flipInY" : "Flip In Y",
 "flipOutX" : "Flip Out X",
 "flipOutY" : "Flip Out Y",
 "lightSpeedIn" : "Light Speed In",
 "lightSpeedOut" : "Light Speed Out",
 "rotateIn" : "Rotate In",
 "rotateInDownLeft" : "Rotate In Down Left",
 "rotateInDownRight" : "Rotate In Down Right",
 "rotateInUpLeft" : "Rotate In Up Left",
 "rotateInUpRight" : "Rotate In Up Right",
 "rotateOut" : "Rotate Out",
 "rotateOutDownLeft" : "Rotate Out Down Left",
 "rotateOutDownRight" : "Rotate Out Down Right",
 "rotateOutUpLeft" : "Rotate Out Up Left",
 "rotateOutUpRight" : "Rotate Out Up Right",
 "hinge" : "Hinge",
 "rollIn" : "Roll In",
 "rollOut" : "Roll Out",
 "zoomIn" : "Zoom In",
 "zoomInDown" : "Zoom In Down",
 "zoomInLeft" : "Zoom In Left",
 "zoomInRight" : "Zoom In Right",
 "zoomInUp" : "Zoom In Up",
 "zoomOut" : "Zoom Out",
 "zoomOutDown" : "Zoom Out Down",
 "zoomOutLeft" : "Zoom Out Left",
 "zoomOutRight" : "Zoom Out Right",
 "zoomOutUp" : "Zoom Out Up"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 30,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 38,
            'key' => 'constant.serials_type',
            'display_name' => '序號類型',
            'value' => '{
 "multi" : "多次",
 "once" : "單次"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 31,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 43,
            'key' => 'constant.pay_sources',
            'display_name' => '付款來源',
            'value' => '{
 "line" : "Line Pay"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 34,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 44,
            'key' => 'constant.article_statuses',
            'display_name' => '文章狀態',
            'value' => '{
 "published" : "上架中",
 "draft" : "草稿",
 "pending" : "待審核"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 35,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 45,
            'key' => 'constant.contact_statuses',
            'display_name' => '聯絡單狀態',
            'value' => '{
 "unHandled" : "未處理",
 "handling" : "處理中" ,
 "delay" : "延遲中" ,
 "isHandled" : "已完成",
 "cancel" : "已取消"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 36,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 46,
            'key' => 'site.copyright',
            'display_name' => '版權宣告',
            'value' => '© Copyright Moderna. All Rights Reserved',
            'details' => NULL,
            'type' => 'text',
            'order' => 44,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 47,
            'key' => 'site.logo2',
            'display_name' => '網站第2Logo',
            'value' => 'settings/March2019/M0dXCvUKJmAlG89vbTUy.png',
            'details' => NULL,
            'type' => 'image',
            'order' => 15,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 48,
            'key' => 'site.contact_info',
            'display_name' => '聯絡頁資訊',
            'value' => '如果您對Ezlaravel有興趣，想要和我們洽談合作，歡迎透過表單或電話與我們聯絡，我們將盡快與您聯絡。',
            'details' => NULL,
            'type' => 'text_area',
            'order' => 45,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 49,
            'key' => 'site.service_mail',
            'display_name' => '客服郵箱',
            'value' => 'info@goblinlab.org',
            'details' => NULL,
            'type' => 'text',
            'order' => 37,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 50,
            'key' => 'site.article_default_pic',
            'display_name' => '預設文章圖片',
            'value' => 'images/vision.jpg',
            'details' => NULL,
            'type' => 'text',
            'order' => 53,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 51,
            'key' => 'admin.isShowAuthor',
            'display_name' => '文章是否顯示作者區塊',
            'value' => 'false',
            'details' => '{
 "default":"false",
    "options":{
        "true":"開啟",
        "false":"關閉"
    }
}',
            'type' => 'select_dropdown',
            'order' => 42,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 52,
            'key' => 'site.logo@2x',
            'display_name' => '網站 Retina Logo',
            'value' => 'settings/November2020/9IARO9zO2bqW4ujI2fzz.png',
            'details' => NULL,
            'type' => 'image',
            'order' => 13,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 53,
            'key' => 'site.favicon',
            'display_name' => '網站Favicon',
            'value' => 'settings/July2019/AFWQtcyHBpgmF6RLvjTk.png',
            'details' => NULL,
            'type' => 'image',
            'order' => 52,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 55,
            'key' => 'site.image',
            'display_name' => '網站代表圖片',
            'value' => NULL,
            'details' => NULL,
            'type' => 'text',
            'order' => 54,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 63,
            'key' => 'site.logo_dark',
            'display_name' => '網站暗色 Logo',
            'value' => 'settings/November2020/sI484Xl2uL2kYvOYY71i.png',
            'details' => NULL,
            'type' => 'image',
            'order' => 4,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 64,
            'key' => 'site.logo-dark@2x',
            'display_name' => '網站暗色 Retina Logo',
            'value' => 'settings/November2020/hK15IWm8KK6vSF4hBaOC.png',
            'details' => NULL,
            'type' => 'image',
            'order' => 14,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 65,
            'key' => 'site.frontend_footer',
            'display_name' => 'Footer文字',
            'value' => '好用又簡單的系統整合工具，值得你信任',
            'details' => NULL,
            'type' => 'text_area',
            'order' => 57,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 66,
            'key' => 'admin.isSendSMS',
            'display_name' => '是否發送簡訊',
            'value' => 'false',
            'details' => '{
 "options" :{
    "true" : "開啟",
    "false" : "關閉"
 },
 "default" : "on"
}',
            'type' => 'select_dropdown',
            'order' => 55,
            'group' => 'Admin'
        ]);



        Setting::create([
            'id' => 67,
            'key' => 'constant.pay_types',
            'display_name' => '付款方式',
            'value' => '{
 "Credit" : "信用卡付款",
 "WebATM" : "網路ATM" ,
 "ATM" : "自動櫃員機" ,
 "CVS" : "超商代碼",
 "BARCODE" : "超商條碼",
 "GooglePay" : "Google Pay"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 56,
            'group' => 'Constant'
        ]);



        Setting::create([
            'id' => 68,
            'key' => 'site.ig_id',
            'display_name' => 'Instagram ID',
            'value' => 'goblinlab',
            'details' => NULL,
            'type' => 'text',
            'order' => 43,
            'group' => 'Site'
        ]);



        Setting::create([
            'id' => 69,
            'key' => 'constant.colors',
            'display_name' => '顏色',
            'value' => '{
 "black": "黑色",
 "red" : "紅色",
 "blue" : "藍色",
 "green" : "綠色" ,
 "white" : "白色" ,
 "yellow" : "黃色",
 "gray" : "灰色",
 "purple" : "紫色",
 "pink" : "粉紅",
 "cyan" : "青色"
}',
            'details' => NULL,
            'type' => 'code_editor',
            'order' => 58,
            'group' => 'Constant'
        ]);




    }
}
