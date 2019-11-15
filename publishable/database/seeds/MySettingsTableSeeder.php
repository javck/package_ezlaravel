<?php

use Illuminate\Database\Seeder;

class MySettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => '網站標題',
                'value' => 'EasyWeb示範網',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => '網站描述',
                'value' => 'EasyWeb，最簡單的網頁後台系統',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => '網站 Logo',
                'value' => 'settings/July2019/UqH0sJ6usPDlZpYy7E5f.png',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 18,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => '後台背景圖像',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 6,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin 標題',
                'value' => 'EasyWeb',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => '後台描述',
                'value' => '歡迎使用EasyWeb - 最簡單的網頁後台工具',
                'details' => '',
                'type' => 'text',
                'order' => 3,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => '後台圖標',
                'value' => 'settings/July2019/UqH0sJ6usPDlZpYy7E5f.png',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
                'display_name' => 'Google Analytics Client ID （於後台控制面板使用）',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'admin.isSendNotify',
                'display_name' => '當收到聯絡表單是否發送通知給管理員',
                'value' => 'true',
                'details' => '{"default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
                'type' => 'select_dropdown',
                'order' => 9,
                'group' => 'Admin',
            ),
            11 => 
            array (
                'id' => 13,
                'key' => 'admin.isRealPath',
                'display_name' => '下載連結是否採用真實的副檔名',
                'value' => 'true',
                'details' => '{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
                'type' => 'select_dropdown',
                'order' => 8,
                'group' => 'Admin',
            ),
            12 => 
            array (
                'id' => 14,
                'key' => 'admin.isShowBigPic',
                'display_name' => '點圖片是否顯示大圖',
                'value' => 'true',
                'details' => '{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
                'type' => 'select_dropdown',
                'order' => 7,
                'group' => 'Admin',
            ),
            13 => 
            array (
                'id' => 15,
                'key' => 'admin.isUseComment',
                'display_name' => '文章是否使用留言模組',
                'value' => 'false',
                'details' => '{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
                'type' => 'select_dropdown',
                'order' => 10,
                'group' => 'Admin',
            ),
            14 => 
            array (
                'id' => 16,
                'key' => 'admin.isUseShop',
                'display_name' => '是否使用商店模組',
                'value' => 'false',
                'details' => '{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
                'type' => 'select_dropdown',
                'order' => 11,
                'group' => 'Admin',
            ),
            15 => 
            array (
                'id' => 18,
                'key' => 'admin.isVideoUpload',
                'display_name' => '是否開放影片自動上傳功能',
                'value' => 'false',
                'details' => '{    "default":"true",    "options":{        "true":"開啟",        "false":"關閉"    }}',
                'type' => 'select_dropdown',
                'order' => 12,
                'group' => 'Admin',
            ),
            16 => 
            array (
                'id' => 19,
                'key' => 'admin.articlesQty',
                'display_name' => '文章列表頁一次呈現數量',
                'value' => '16',
                'details' => '{    "default":"5"}',
                'type' => 'text',
                'order' => 16,
                'group' => 'Admin',
            ),
            17 => 
            array (
                'id' => 20,
                'key' => 'site.phone',
                'display_name' => '電話',
            'value' => '(02)89697472',
                'details' => NULL,
                'type' => 'text',
                'order' => 19,
                'group' => 'Site',
            ),
            18 => 
            array (
                'id' => 21,
                'key' => 'site.mobile',
                'display_name' => '手機號碼',
                'value' => '0939287209',
                'details' => NULL,
                'type' => 'text',
                'order' => 20,
                'group' => 'Site',
            ),
            19 => 
            array (
                'id' => 23,
                'key' => 'admin.admin_mail',
                'display_name' => '管理員郵箱',
                'value' => 'zack@goblinlab.org',
                'details' => NULL,
                'type' => 'text',
                'order' => 42,
                'group' => 'Admin',
            ),
            20 => 
            array (
                'id' => 24,
                'key' => 'site.lineAt',
                'display_name' => '官方Line帳號',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 38,
                'group' => 'Site',
            ),
            21 => 
            array (
                'id' => 25,
                'key' => 'site.weChat',
                'display_name' => 'WeChat帳號',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 39,
                'group' => 'Site',
            ),
            22 => 
            array (
                'id' => 26,
                'key' => 'site.fb_id',
                'display_name' => 'FB ID',
                'value' => 'goblinlab',
                'details' => NULL,
                'type' => 'text',
                'order' => 40,
                'group' => 'Site',
            ),
            23 => 
            array (
                'id' => 27,
                'key' => 'site.address',
                'display_name' => '服務所在地址',
                'value' => '220 新北市板橋區樂群路42號4樓之3',
                'details' => NULL,
                'type' => 'text',
                'order' => 41,
                'group' => 'Site',
            ),
            24 => 
            array (
                'id' => 28,
                'key' => 'constant.services',
                'display_name' => '聯絡單所提供服務選項',
                'value' => '{    "service_basic":"入門版試用" ,  "service_professional":"專業版試用" ,  "service_commerce":"商務版試用", "others":"其他事項"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 21,
                'group' => 'Constant',
            ),
            25 => 
            array (
                'id' => 29,
                'key' => 'constant.sources',
                'display_name' => '流量來源選項',
                'value' => '{    "recommend" : "親友推薦" ,    "fb" : "Facebook介紹" ,    "google" : "Google查詢" ,    "post" : "海報看板" ,    "others" : "其他"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 22,
                'group' => 'Constant',
            ),
            26 => 
            array (
                'id' => 30,
                'key' => 'constant.pages',
                'display_name' => '網頁頁面',
                'value' => '{    
"all" : "全部",
"demo" : "展示頁",
"home" : "首頁" ,
"about" : "關於我們" ,
"contact" : "聯絡我們",
"news" : "最新消息",
"qna" : "常見問題"
}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 23,
                'group' => 'Constant',
            ),
            27 => 
            array (
                'id' => 31,
                'key' => 'constant.element_modes',
                'display_name' => '元素模式',
                'value' => '{    "txt" : "文字段落" ,    "iconTxt" : "Icon文字" ,    "imgText" : "圖文",    "imgBtn" : "圖片按鈕" ,    "action" : "行動請求" ,    "richTxt" : "多媒體連結" ,    "slider" : "廣告牆",    "qna" : "Q & A" ,    "iSwitch" : "資訊切換" ,    "price" : "價目"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 24,
                'group' => 'Constant',
            ),
            28 => 
            array (
                'id' => 32,
                'key' => 'constant.lang',
                'display_name' => '語系',
                'value' => '{    "zh_TW" : "中文"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 25,
                'group' => 'Constant',
            ),
            29 => 
            array (
                'id' => 33,
                'key' => 'constant.titlePoses',
                'display_name' => 'Slider Title位置',
                'value' => '{    "botLeft" : "底部左側" ,    "botRight" : "底部右側"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 26,
                'group' => 'Constant',
            ),
            30 => 
            array (
                'id' => 34,
                'key' => 'constant.media_types',
                'display_name' => '媒體類型',
                'value' => '{    "image" : "大圖展示",    "video" : "影片",    "web" : "網頁" ,    "gallery-item" :"藝廊"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 27,
                'group' => 'Constant',
            ),
            31 => 
            array (
                'id' => 35,
                'key' => 'constant.article_modes',
                'display_name' => '文章模式',
                'value' => '{    "singleImg" : "單張圖片",    "multiImgs" : "多張圖片" ,    "puzzle" : "拼貼圖片" ,    "film" : "影片",    "sentense" : "短句",    "quote" : "格言" ,    "link":"連結"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 28,
                'group' => 'Constant',
            ),
            32 => 
            array (
                'id' => 36,
                'key' => 'constant.order_statuses',
                'display_name' => '訂單狀態',
                'value' => '{    "created" : "訂單成立",    "prepare" : "備貨中" ,    "finish" : "訂單完成" ,    "cancel" : "訂單取消"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 29,
                'group' => 'Constant',
            ),
            33 => 
            array (
                'id' => 37,
                'key' => 'constant.animStyles',
                'display_name' => '動畫類別',
                'value' => '{    "bounce" : "Bounce",    "flash" : "Flash",    "pulse" : "Pulse",    "rubberBand" : "RubberBand",    "shake" : "Shake",    "swing" : "Swing",    "tada" : "Tada",    "wobble" : "Wobble",    "bounceIn" : "Bounce In",    "bounceInDown" : "Bounce In Down",    "bounceInLeft" : "Bounce In Left",    "bounceInRight" : "Bounce In Right",    "bounceInUp" : "Bounce In Up",    "bounceOut" : "Bounce Out",    "bounceOutDown" : "Bounce Out Down",    "bounceOutLeft" : "Bounce Out Left",    "bounceOutRight" : "Bounce Out Right",    "bounceOutUp" : "Bounce Out Up",    "fadeIn" : "Fade In",    "fadeInDown" : "Fade In Down",    "fadeInDownBig" : "Fade In Down Big",    "fadeInLeft" : "Fade In Left",    "fadeInLeftBig" : "Fade In Left Big",    "fadeInRight" : "Fade In Right",    "fadeInRightBig" : "Fade In Right Big",    "fadeInUp" : "Fade In Up",    "fadeInUpBig" : "Fade In Up Big",    "fadeOut" : "Fade Out",    "fadeOutDown" : "Fade Out Down",    "fadeOutDownBig" : "Fade Out Down Big",    "fadeOutLeft" : "Fade Out Left",    "fadeOutLeftBig" : "Fade Out Left Big",    "fadeOutRight" : "Fade Out Right",    "fadeOutRightBig" : "Fade Out Right Big",    "fadeOutUp" : "Fade Out Up",    "fadeOutUpBig" : "Fade Out Up Big",    "flip" : "Flip",    "flipInX" : "Flip In X",    "flipInY" : "Flip In Y",    "flipOutX" : "Flip Out X",    "flipOutY" : "Flip Out Y",    "lightSpeedIn" : "Light Speed In",    "lightSpeedOut" : "Light Speed Out",    "rotateIn" : "Rotate In",    "rotateInDownLeft" : "Rotate In Down Left",    "rotateInDownRight" : "Rotate In Down Right",    "rotateInUpLeft" : "Rotate In Up Left",    "rotateInUpRight" : "Rotate In Up Right",    "rotateOut" : "Rotate Out",    "rotateOutDownLeft" : "Rotate Out Down Left",    "rotateOutDownRight" : "Rotate Out Down Right",    "rotateOutUpLeft" : "Rotate Out Up Left",    "rotateOutUpRight" : "Rotate Out Up Right",    "hinge" : "Hinge",    "rollIn" : "Roll In",    "rollOut" : "Roll Out",    "zoomIn" : "Zoom In",    "zoomInDown" : "Zoom In Down",    "zoomInLeft" : "Zoom In Left",    "zoomInRight" : "Zoom In Right",    "zoomInUp" : "Zoom In Up",    "zoomOut" : "Zoom Out",    "zoomOutDown" : "Zoom Out Down",    "zoomOutLeft" : "Zoom Out Left",    "zoomOutRight" : "Zoom Out Right",    "zoomOutUp" : "Zoom Out Up"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 30,
                'group' => 'Constant',
            ),
            34 => 
            array (
                'id' => 38,
                'key' => 'constant.serials_type',
                'display_name' => '序號類型',
                'value' => '{    "multi" : "多次",    "once" : "單次"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 31,
                'group' => 'Constant',
            ),
            35 => 
            array (
                'id' => 43,
                'key' => 'constant.pay_sources',
                'display_name' => '付款來源',
                'value' => '{    "line" : "Line Pay" , "Credit_CreditCard" : "信用卡支付"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 34,
                'group' => 'Constant',
            ),
            36 => 
            array (
                'id' => 44,
                'key' => 'constant.article_statuses',
                'display_name' => '文章狀態',
                'value' => '{    "published" : "上架中",    "draft" : "草稿",    "pending" : "待審核"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 35,
                'group' => 'Constant',
            ),
            37 => 
            array (
                'id' => 45,
                'key' => 'constant.contact_statuses',
                'display_name' => '聯絡單狀態',
                'value' => '{    "unHandled" : "未處理",    "handling" : "處理中" ,    "delay" : "延遲中" ,    "isHandled" : "已完成",    "cancel" : "已取消"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 36,
                'group' => 'Constant',
            ),
            38 => 
            array (
                'id' => 46,
                'key' => 'site.copyright',
                'display_name' => '版權宣告',
                'value' => 'Copyrights © Goblin Lab Studio all rights reserved.',
                'details' => NULL,
                'type' => 'text',
                'order' => 43,
                'group' => 'Site',
            ),
            39 => 
            array (
                'id' => 47,
                'key' => 'site.logo2',
                'display_name' => '網站第2Logo',
                'value' => 'settings/March2019/M0dXCvUKJmAlG89vbTUy.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 15,
                'group' => 'Site',
            ),
            40 => 
            array (
                'id' => 48,
                'key' => 'site.contact_info',
                'display_name' => '聯絡頁資訊',
                'value' => '如果您對EasyWeb有興趣想要了解更多細節，歡迎透過表單或電話與我們聯絡，我們將盡快與您聯絡。',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 44,
                'group' => 'Site',
            ),
            41 => 
            array (
                'id' => 49,
                'key' => 'site.service_mail',
                'display_name' => '客服郵箱',
                'value' => 'zack@goblinlab.org',
                'details' => NULL,
                'type' => 'text',
                'order' => 37,
                'group' => 'Site',
            ),
            42 => 
            array (
                'id' => 50,
                'key' => 'site.article_default_pic',
                'display_name' => '預設文章圖片',
                'value' => 'images/vision.jpg',
                'details' => NULL,
                'type' => 'text',
                'order' => 52,
                'group' => 'Site',
            ),
            43 => 
            array (
                'id' => 51,
                'key' => 'admin.isShowAuthor',
                'display_name' => '文章是否顯示作者區塊',
                'value' => 'false',
                'details' => '{    "default":"false",    "options":{        "true":"開啟",        "false":"關閉"    }}',
                'type' => 'select_dropdown',
                'order' => 55,
                'group' => 'Admin',
            ),
            44 => 
            array (
                'id' => 52,
                'key' => 'site.logo@2x',
                'display_name' => '網站 Retina Logo',
                'value' => 'settings/April2019/XISlDNHNtQXo67jjMYm2.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 13,
                'group' => 'Site',
            ),
            45 => 
            array (
                'id' => 53,
                'key' => 'site.favicon',
                'display_name' => '網站Favicon',
                'value' => 'settings/July2019/AFWQtcyHBpgmF6RLvjTk.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 45,
                'group' => 'Site',
            ),
            46 => 
            array (
                'id' => 55,
                'key' => 'site.image',
                'display_name' => '網站代表圖片',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 53,
                'group' => 'Site',
            ),
            47 => 
            array (
                'id' => 57,
                'key' => 'canvas.header_class',
                'display_name' => 'Header Class',
                'value' => 'split-menu transparent-header dark',
                'details' => NULL,
                'type' => 'text',
                'order' => 46,
                'group' => 'Canvas',
            ),
            48 => 
            array (
                'id' => 58,
                'key' => 'canvas.header_sticky_class',
                'display_name' => 'Header Sticky Class',
                'value' => 'not-dark',
                'details' => '{
"options" : {
"none": "不設定",
"dark": "暗色",
"not-dark": "非暗色",
"semi-transparent" : "半透明"
},
"default": "不設定"
}',
                'type' => 'select_dropdown',
                'order' => 47,
                'group' => 'Canvas',
            ),
            49 => 
            array (
                'id' => 59,
                'key' => 'canvas.header_responsive_class',
                'display_name' => 'Header Responsive Class',
                'value' => 'not-dark',
                'details' => '{
"options" : {
"none": "不設定",
"dark": "暗色",
"not-dark": "非暗色",
"semi-transparent" : "半透明"
},
"default" : "none"
}',
                'type' => 'select_dropdown',
                'order' => 48,
                'group' => 'Canvas',
            ),
            50 => 
            array (
                'id' => 60,
                'key' => 'canvas.pri_menu_class',
                'display_name' => 'Primary Menu Class',
                'value' => 'with-arrows clearfix not-dark',
                'details' => NULL,
                'type' => 'text',
                'order' => 49,
                'group' => 'Canvas',
            ),
            51 => 
            array (
                'id' => 61,
                'key' => 'canvas.slider_class',
                'display_name' => 'Slider Class',
                'value' => 'slider-parallax swiper_wrapper full-screen clearfix',
                'details' => NULL,
                'type' => 'text',
                'order' => 51,
                'group' => 'Canvas',
            ),
            52 => 
            array (
                'id' => 62,
                'key' => 'canvas.slider_data_loop',
                'display_name' => 'Slider Data Loop',
                'value' => 'true',
                'details' => '{
"options" : {
"true" : "循環",
"false" : "靜態"
}
}',
                'type' => 'select_dropdown',
                'order' => 62,
                'group' => 'Canvas',
            ),
            53 => 
            array (
                'id' => 63,
                'key' => 'site.logo_dark',
                'display_name' => '網站暗色 Logo',
                'value' => 'settings/April2019/dmFby8EBl8GS7sGpKLxR.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 4,
                'group' => 'Site',
            ),
            54 => 
            array (
                'id' => 64,
                'key' => 'site.logo-dark@2x',
                'display_name' => '網站暗色 Retina Logo',
                'value' => 'settings/April2019/Mjw6kqdsjhhgIZvtLp5Z.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 14,
                'group' => 'Site',
            ),
            55 => 
            array (
                'id' => 65,
                'key' => 'site.frontend_footer',
                'display_name' => 'Footer文字',
                'value' => '好用又簡單的系統整合工具，值得你信任',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 54,
                'group' => 'Site',
            ),
            56 => 
            array (
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
                'order' => 60,
                'group' => 'Admin',
            ),
            57 => 
            array (
                'id' => 67,
                'key' => 'constant.pay_types',
                'display_name' => '付款方式',
                'value' => '{    "Credit" : "信用卡付款",    "WebATM" : "網路ATM" ,    "ATM" : "自動櫃員機" ,    "CVS" : "超商代碼",    "BARCODE" : "超商條碼",    "GooglePay" : "Google Pay"}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 56,
                'group' => 'Constant',
            ),
            58 => 
            array (
                'id' => 68,
                'key' => 'site.pay_atm_info',
                'display_name' => '銀行轉帳訊息',
                'value' => '請匯款至國泰世華銀行 板橋分行，銀行代碼013，帳號為國泰世華銀行 銀行代碼 013 帳號 017-03-500556-1 哥布林科技有限公司，匯款後請提供帳號後四碼以供確認',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 57,
                'group' => 'Site',
            ),
            59 => 
            array (
                'id' => 69,
                'key' => 'site.pay_third_info',
                'display_name' => '第三方支付訊息',
                'value' => '本網站使用綠界第三方支付，提供信用卡付款.7-11到店付款等付款方式',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 58,
                'group' => 'Site',
            ),
            60 => 
            array (
                'id' => 70,
                'key' => 'constant.basic_shipCost',
                'display_name' => '基本運費',
                'value' => '0',
                'details' => NULL,
                'type' => 'text',
                'order' => 59,
                'group' => 'Constant',
            ),
            61 => 
            array (
                'id' => 71,
                'key' => 'admin.isMinusStock',
                'display_name' => '是否自動扣庫存',
                'value' => 'true',
                'details' => '{
"default":"true",
"options":{
"true":"開啟",
"false":"關閉"
}
}',
                'type' => 'select_dropdown',
                'order' => 64,
                'group' => 'Admin',
            ),
            62 => 
            array (
                'id' => 72,
                'key' => 'site.free_ship_plan',
                'display_name' => '免運辦法',
                'value' => '訂單總金額達<strong>1000</strong>元可享免運優惠',
                'details' => NULL,
                'type' => 'text',
                'order' => 61,
                'group' => 'Site',
            ),
            63 => 
            array (
                'id' => 73,
                'key' => 'canvas.pri_menu_file',
                'display_name' => 'Primary Menu File',
                'value' => 'menu.classic',
                'details' => NULL,
                'type' => 'text',
                'order' => 50,
                'group' => 'Canvas',
            ),
            64 => 
            array (
                'id' => 74,
                'key' => 'site.item_default_pic',
                'display_name' => '預設商品圖片',
                'value' => 'settings/August2019/wh34CAkvIYKAFL5b5ksr.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 63,
                'group' => 'Site',
            ),
            65 => 
            array (
                'id' => 75,
                'key' => 'admin.google_search_id',
                'display_name' => '搜尋引擎ID',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            66 => 
            array (
                'id' => 76,
                'key' => 'constant.order_types',
                'display_name' => '訂單類型',
                'value' => '{
"normal" : "商品",
"consolidation" : "集運",
"class" : "課程"
}',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 65,
                'group' => 'Constant',
            ),
            67 => 
            array (
                'id' => 77,
                'key' => 'site.embeddedCode',
                'display_name' => '網站內嵌碼',
                'value' => NULL,
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 66,
                'group' => 'Site',
            ),
            68 => 
            array (
                'id' => 78,
                'key' => 'admin.useSocialite',
                'display_name' => '使用社群登入',
                'value' => 'true',
                'details' => '{
"default" : "true",
"options" : {
"true" : "開啟",
"false" : "關閉"
}
}',
                'type' => 'select_dropdown',
                'order' => 67,
                'group' => 'Admin',
            ),
            69 => 
            array (
                'id' => 79,
                'key' => 'admin.useRegisterActivate',
                'display_name' => '使用帳號激活功能',
                'value' => 'false',
                'details' => '{
"default" : "true",
"options" : {
"true" : "開啟",
"false" : "關閉"
}
}',
                'type' => 'select_dropdown',
                'order' => 68,
                'group' => 'Admin',
            ),
            70 => 
            array (
                'id' => 80,
                'key' => 'canvas.posts_class',
                'display_name' => '部落格樣式',
                'value' => '',
                'details' => NULL,
                'type' => 'text',
                'order' => 69,
                'group' => 'Canvas',
            ),
        ));
        
        
    }
}