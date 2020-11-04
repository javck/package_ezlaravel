<?php

use Illuminate\Database\Seeder;
use App\Models\Element;

class ElementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Element::truncate();
        //Slider
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'最新日貨熱賣中' , 'subtitle'=>'數量有限，千萬別錯過' ,'position'=>'slider','lang'=>'zh-TW','pic'=>'slider/swiper/1.jpg','alt'=>'最新日貨熱賣中' ,'content'=>null,'sort'=>0,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'最新優惠活動' , 'subtitle'=>'所有商品一折起' ,'position'=>'slider','lang'=>'zh-TW','pic'=>'slider/swiper/2.jpg','alt'=>'最新優惠活動' ,'content'=>null,'sort'=>0,'enabled'=>true]);
        //關於我們
        Element::create(['page'=>'home','mode'=>'txt','title'=>'關於我們' ,'position'=>'aboutUs','lang'=>'zh-TW','content'=>'關於我們的介紹文字','sort'=>0,'enabled'=>true]);
        //特色
        Element::create(['page'=>'home','mode'=>'txt','title'=>'本店特色' , 'subtitle'=>'讓你一買就愛上' ,'position'=>'spec_top','lang'=>'zh-TW','content'=>null,'sort'=>0,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'特色1' , 'subtitle'=>'特色1的介紹文字' ,'position'=>'spec','lang'=>'zh-TW','pic'=>'services/1.jpg','alt'=>'特色1' ,'content'=>null,'sort'=>0,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'特色2' , 'subtitle'=>'特色2的介紹文字' ,'position'=>'spec','lang'=>'zh-TW','pic'=>'services/2.jpg','alt'=>'特色2' ,'content'=>null,'sort'=>1,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'特色3' , 'subtitle'=>'特色3的介紹文字' ,'position'=>'spec','lang'=>'zh-TW','pic'=>'services/3.jpg','alt'=>'特色3' ,'content'=>null,'sort'=>2,'enabled'=>true]);
        //訂閱電子報
        Element::create(['page'=>'home','mode'=>'txt','title'=>'訂閱電子報' ,'position'=>'subscribe','lang'=>'zh-TW','content'=>'電子報將不定期提供優惠情報與活動資訊','sort'=>0,'enabled'=>true]);
        //合作夥伴
        Element::create(['page'=>'home','mode'=>'txt','title'=>'合作夥伴' ,'position'=>'partner_top','lang'=>'zh-TW','content'=>null,'sort'=>0,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'Adidas' ,'url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/1.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>0,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'Armani','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/2.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>1,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'Converse','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/3.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>2,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'Queen','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/4.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>3,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'CK','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/5.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>4,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'LEE','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/6.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>5,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'Levis','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/7.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>6,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'Disney','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/8.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>7,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'Gucci','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/9.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>8,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'MTV','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/10.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>9,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'Pape','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/11.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>10,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'PlayBoy','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/12.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>11,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'Puma','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/13.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>12,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'Rbk','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/14.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>13,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'Rolex','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/15.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>14,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'United','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/16.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>15,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'AllenSoy','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/19.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>16,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'imgText','title'=>'Wrangler','url'=>'http://www.yahoo.com.tw' ,'position'=>'partner','pic'=>'clients/logo/18.png','alt'=>'合作夥伴Logo' ,'lang'=>'zh-TW','content'=>null,'sort'=>17,'enabled'=>true]);
        //優勢
        Element::create(['page'=>'home','mode'=>'iconTxt','title'=>'100%正貨','subtitle'=>'我們保證只賣真貨，假一賠十','position'=>'fullChars','icon'=>'icon-thumbs-up2','lang'=>'zh-TW','content'=>null,'sort'=>0,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'iconTxt','title'=>'付費方式','subtitle'=>'我們接受多樣的付費方式','position'=>'fullChars','icon'=>'icon-credit-cards','lang'=>'zh-TW','content'=>null,'sort'=>1,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'iconTxt','title'=>'運費優惠','subtitle'=>'滿千元即可享免運優惠','position'=>'fullChars','icon'=>'icon-truck2','lang'=>'zh-TW','content'=>null,'sort'=>1,'enabled'=>true]);
        Element::create(['page'=>'home','mode'=>'iconTxt','title'=>'七天鑑賞期','subtitle'=>'購物可享七天內退貨全額退費保證','position'=>'fullChars','icon'=>'icon-undo','lang'=>'zh-TW','content'=>null,'sort'=>1,'enabled'=>true]);
        //CallAction Subscribe
        Element::create(['page'=>'home','mode'=>'richTxt','title'=>'索取折價券','subtitle'=>'訂閱電子報，立即取得專享折價券','position'=>'callActionSubscribe','pic'=>'services/4.jpg','lang'=>'zh-TW','url_txt' => '取得優惠' ,'content'=>'不需繁複的資料，只要填寫可收信的電子郵箱，立即取得優惠折價券，送完為止。','sort'=>0,'enabled'=>true]);

        //Q&A
        Element::create(['page'=>'qna','mode'=>'qna','title'=>'請問上課是如何進行的?','position'=>'row1','icon'=>'icon-line-globe','lang'=>'zh-TW','content'=>'我們是透過網路進行上課的唷!','q_mode'=>6,'sort'=>0]);
        Element::create(['page'=>'qna','mode'=>'qna','title'=>'請問是怎麼收費的?','position'=>'row1','icon'=>'icon-line-globe','lang'=>'zh-TW','content'=>'我們只能付現唷!','q_mode'=>7,'sort'=>0]);
        Element::create(['page'=>'qna','mode'=>'qna','title'=>'請問可以請假嗎?','position'=>'row1','icon'=>'icon-line-globe','lang'=>'zh-TW','content'=>'只要提前兩天申請即可!','q_mode'=>8,'sort'=>0]);

        //Vision
        Element::create(['page'=>'vision','mode'=>'richTxt','title'=>'打造最好的線上程式教育品牌','position'=>'content','lang'=>'zh_TW','subtitle'=>'哥布林，啟動你的學習超能力','content'=>'<p>哥布林程式教育學苑，為學員提供最好的程式線上教學平台就是我們的願景</p>','url'=>'#','url_txt'=>'報名試聽','pic'=>'ipad-section.png']);
        Element::create(['page'=>'vision','mode'=>'txt','title'=>'為何堅持打造線上程式教育平台？','position'=>'top','lang'=>'zh_TW','content'=>'學習程式教育不應有時間.距離.費用的限制，少了實體教室，卻多了的彈性，線上程式課程給你最好的學習體驗。']);
        Element::create(['page'=>'vision','mode'=>'imgText','title'=>'孩子愛上玩程式','position'=>'slider','lang'=>'zh_TW','pic'=>'upload/3pxn0gmkd6kz.jpg','sort'=>0]);
        Element::create(['page'=>'vision','mode'=>'imgText','title'=>'隨時隨地學習程式','position'=>'slider','lang'=>'zh_TW','pic'=>'upload/sbvc538zo0h0.jpg','sort'=>1]);
        Element::create(['page'=>'vision','mode'=>'imgText','title'=>'專業的教學團隊','position'=>'slider','lang'=>'zh_TW','pic'=>'upload/ou5py5otka9b.jpg','sort'=>2]);

        //聯絡我們
        Element::create(['page'=>'all','mode'=>'txt','title'=>'填寫資料的好處','position'=>'contact_info','lang'=>'zh_TW','content'=>'請您放心，填寫並不代表報名']);

        //課程內容
        Element::create(['id'=>42,'page'=>'app','mode'=>'iconTxt','title'=>'基本語法','position'=>'tutorPlan1', 'icon'=>'icon-meter' ,'lang'=>'zh_TW','content'=>'學習呼叫函式並了解程式執行順序','sort'=>0]);
        Element::create(['id'=>43,'page'=>'app','mode'=>'iconTxt','title'=>'開發環境建置','position'=>'tutorPlan1', 'icon'=>'icon-settings2' ,'lang'=>'zh_TW','content'=>'安裝CoronaSDK工具，以及SublimeText整合開發平台','sort'=>1]);
        Element::create(['id'=>44,'page'=>'laravel','mode'=>'iconTxt','title'=>'基本語法','position'=>'tutorPlan1', 'icon'=>'icon-meter' ,'lang'=>'zh_TW','content'=>'學習呼叫函式並了解程式執行順序','sort'=>0]);
    }
}
