<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Element;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Element::truncate();

        Element::create([
            'id' => 1,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'slider',
            'title' => '美麗的網站',
            'position' => 'slider',

            'icon' => NULL,
            'subtitle' => '遠比你的想像簡單',
            'content' => NULL,
            'url' => '#',
            'url_txt' => '免費試用',
            'pic' => 'elements/al-abelarde-JTL1sXlJz2U-unsplash.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'botLeft',
            'title_color' => NULL,
            'q_mode' => '7',
            'i_mode' => NULL,
            'sort' => 1,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => 2019,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => 'Bounce',
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 2,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'richTxt',
            'title' => '次世代的ERP後台商品',
            'position' => 'row1',

            'icon' => NULL,
            'subtitle' => '走向未來',
            'content' => '

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel! Eius pariatur nemo expedita.

',
            'url' => '#',
            'url_txt' => '了解更多',
            'pic' => 'images/upload/gz4i8n0lgea1.png',
            'video' => NULL,
            'alt' => '次世代的網頁後台商品',
            'title_pos' => 'botLeft',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 2,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => 2019,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => 'bounce',
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 3,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'richTxt',
            'title' => '驚人的視覺，歡迎豪',
            'position' => 'row2',

            'icon' => NULL,
            'subtitle' => '支援Retina 解析度 ~ 534 PPI',
            'content' => '

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel! Eius pariatur nemo expedita.

',
            'url' => '#',
            'url_txt' => '了解更多',
            'pic' => 'images/upload/hci633vi36gp.png',
            'video' => NULL,
            'alt' => '驚人的視覺',
            'title_pos' => 'botLeft',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 3,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => 2019,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => 'bounce',
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 4,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'richTxt',
            'title' => '完美支持手機版',
            'position' => 'row3',

            'icon' => NULL,
            'subtitle' => '70%使用者透過手機瀏覽',
            'content' => '你不用在擔心怎麼處理手機版的頁面，把問題交給我們吧!',
            'url' => '#',
            'url_txt' => '了解更多',
            'pic' => 'images/upload/asxdydk991qk.png',
            'video' => NULL,
            'alt' => '完美支持手機版',
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 4,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => 2019,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 5,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'price',
            'title' => '入門版',
            'position' => 'prices',

            'icon' => NULL,
            'subtitle' => '限量優惠',
            'content' => '


Full Access

 Source Files

100 User Accounts

1 Year License

Phone & Email Support

',
            'url' => '#',
            'url_txt' => '立刻試用',
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 5,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => 0,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => '新台幣',
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 6,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'price',
            'title' => '專業版',
            'position' => 'prices',

            'icon' => NULL,
            'subtitle' => '限時優惠',
            'content' => '


Full Access

 Source Files

1000 User Accounts

2 Years License



',
            'url' => '#',
            'url_txt' => '開始免費試用',
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 6,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => 12,
            'price2' => NULL,
            'isBestPrice' => 1,
            'priceUnit' => '新台幣',
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 7,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'price',
            'title' => '商業版',
            'position' => 'prices',

            'icon' => NULL,
            'subtitle' => '超值服務',
            'content' => '


Full Access

 Source Files

500 User Accounts

3 Years License

Phone & Email Support

',
            'url' => '#',
            'url_txt' => '開始免費試用',
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 7,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => 19,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => '新台幣',
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 8,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'txt',
            'title' => 'How do I become an author?',
            'position' => 'qna',

            'icon' => NULL,
            'subtitle' => NULL,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi.',
            'url' => NULL,
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 8,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 10,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'txt',
            'title' => 'How much money can I make?',
            'position' => 'qna',

            'icon' => NULL,
            'subtitle' => NULL,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae.',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 30,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 11,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'txt',
            'title' => 'Can I offer my items for free on a promo',
            'position' => 'qna',

            'icon' => NULL,
            'subtitle' => NULL,
            'content' => 'Laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 40,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 12,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'txt',
            'title' => 'An Introduction to the Marketplaces for ',
            'position' => 'qna',

            'icon' => NULL,
            'subtitle' => NULL,
            'content' => 'Quisquam atque vero delectus corrupti! Quo, maiores, dolorem, hic commodi nulla ratione accusamus doloribus fuga magnam id temporibus dignissimos deleniti quidem ipsam corporis sapiente nam expedita saepe quas ab? Vero, assumenda.',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 43,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 13,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'txt',
            'title' => 'How does the Tuts+ Premium affiliate pro',
            'position' => 'qna',

            'icon' => NULL,
            'subtitle' => NULL,
            'content' => 'Reprehenderit similique nemo voluptate ullam natus illum magnam alias nobis doloremque delectus ipsa dicta repellat maxime dignissimos eveniet quae debitis ratione assumenda tempore officiis fugiat dolor.',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 46,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 14,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'imgText',
            'title' => 'Steve Jobs',
            'position' => 'comments',

            'icon' => NULL,
            'subtitle' => 'Apple Inc.',
            'content' => 'Similique fugit repellendus expedita excepturi iure provident quia eaque. Repellendus, vero numquam?',
            'url' => NULL,
            'url_txt' => NULL,
            'pic' => 'images/upload/uhjmrizvl2br.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 9,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 16,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'imgText',
            'title' => 'John Doe',
            'position' => 'comments',

            'icon' => NULL,
            'subtitle' => 'XYZ Inc.',
            'content' => 'Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/upload/xvk92cqa3an9.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 31,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 17,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'iconTxt',
            'title' => 'Cross Browser',
            'position' => 'chars',

            'icon' => 'icon-et-browser',
            'subtitle' => NULL,
            'content' => 'Canvas 4 Loads Faster & Smoother than the Previous Versions providing an Optimal Experience for your Users.',
            'url' => NULL,
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 10,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 18,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'iconTxt',
            'title' => 'Flexible Options',
            'position' => 'chars',

            'icon' => 'icon-et-adjustments',
            'subtitle' => NULL,
            'content' => 'Unleash the Power of Mega Menus by adding Widgets & Mixed Columns powered by the Bootstrap Grid.',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 25,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 19,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'iconTxt',
            'title' => 'Scheduled Backups',
            'position' => 'chars',

            'icon' => 'icon-et-calendar',
            'subtitle' => NULL,
            'content' => 'Amazing set of New Components giving you Opportunity to Create an Interactive Website for your Business.',
            'url' => NULL,
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 32,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 20,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'iconTxt',
            'title' => 'Responsive Ready',
            'position' => 'chars',

            'icon' => 'icon-et-desktop',
            'subtitle' => NULL,
            'content' => 'Convert any Grid to an Isotope Grid easily with Filterable Options making it extremely flexible and powerful.',
            'url' => NULL,
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 41,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 21,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'iconTxt',
            'title' => 'Increased Conversions',
            'position' => 'chars',

            'icon' => 'icon-et-bargraph',
            'subtitle' => NULL,
            'content' => 'Display an Alternate Lighter Menu on Responsive Devices with the same Markup Code as before. Awesomely Useful.',
            'url' => NULL,
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 44,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 22,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'iconTxt',
            'title' => 'Cloud Sharing',
            'position' => 'chars',

            'icon' => 'icon-et-cloud',
            'subtitle' => NULL,
            'content' => 'Added SPAM Protection for your Precious Forms so that you receive Emails only from Authentic Real Users.',
            'url' => NULL,
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 47,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 23,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'richTxt',
            'title' => '網站舊換新',
            'position' => 'row4',

            'icon' => NULL,
            'subtitle' => '優惠方案實施中',
            'content' => '

免費試用

',
            'url' => '#modal-login',
            'url_txt' => '立刻登入',
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 11,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 24,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'iconTxt',
            'title' => '免費諮詢',
            'position' => 'row5',

            'icon' => 'icon-line2-globe-alt',
            'subtitle' => '24小時服務',
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 12,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 25,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'iconTxt',
            'title' => '99.99%上線率',
            'position' => 'row5',

            'icon' => 'icon-line2-notebook',
            'subtitle' => '12個月不間斷',
            'content' => NULL,
            'url' => NULL,
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 26,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 26,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'iconTxt',
            'title' => '專注於',
            'position' => 'row5',

            'icon' => 'icon-line2-lock',
            'subtitle' => '網頁安全',
            'content' => NULL,
            'url' => NULL,
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'none',
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 33,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 32,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'imgText',
            'title' => '作品1',
            'position' => 'gallery',

            'icon' => NULL,
            'subtitle' => NULL,
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'elements/img-1.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 13,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => 'bounce',
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 33,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'imgText',
            'title' => '作品2',
            'position' => 'gallery',

            'icon' => NULL,
            'subtitle' => NULL,
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'elements/img-2.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 34,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => 'bounce',
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 34,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'imgText',
            'title' => '作品3',
            'position' => 'gallery',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'elements/img-3.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 42,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => 'bounce',
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 35,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'imgText',
            'title' => '作品4',
            'position' => 'gallery',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'elements/img-1.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 45,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => 'bounce',
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 36,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'imgText',
            'title' => '作品5',
            'position' => 'gallery',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'elements/img-5.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 48,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => 'bounce',
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 37,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'imgText',
            'title' => '作品6',
            'position' => 'gallery',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'elements/img-3.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 51,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => 'bounce',
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 38,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'imgText',
            'title' => '作品7',
            'position' => 'gallery',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'elements/img-7.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 50,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => 'bounce',
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 39,
            'updater_id' => NULL,
            'page' => 'demo',
            'mode' => 'action',
            'title' => '軟體畫面',
            'position' => 'gallery_top',
            'icon' => NULL,
            'subtitle' => '方便的功能，美觀的使用者介面，盡在EasyWeb。今天就來試用...',
            'content' => NULL,
            'url' => '#',
            'url_txt' => '看更多',
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 14,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 40,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'slider',
            'title' => 'EzLaravel',
            'position' => 'slider',
            'icon' => NULL,
            'subtitle' => '教你快速入門 Laravel + Voyager 極速開發術',
            'content' => NULL,
            'url' => 'https://goblinlab.org',
            'url_txt' => '了解更多',
            'pic' => 'images/hero-bg.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'botLeft',
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 54,
            'updater_id' => NULL,
            'page' => 'contact',
            'mode' => 'txt',
            'title' => '填寫資料的好處',
            'position' => 'contact_info',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '

請您放心，填寫並不代表下訂

',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => NULL,
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 21,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 55,
            'updater_id' => NULL,
            'page' => 'qna',
            'mode' => 'qna',
            'title' => '請問貨物是如何寄送的?',
            'position' => 'items',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '

我們是透過快遞或是7-11物流在運送的，食品都會經過低溫保存!

',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => NULL,
            'q_mode' => '7',
            'i_mode' => NULL,
            'sort' => 22,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 56,
            'updater_id' => NULL,
            'page' => 'qna',
            'mode' => 'qna',
            'title' => '請問運費如何計算?',
            'position' => 'items',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '

是由物流公司來根據距離來計算，目前我們有免運政策，訂單達1000元以上即可享受免運優惠

',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => NULL,
            'q_mode' => '8',
            'i_mode' => NULL,
            'sort' => 23,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 59,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'iconTxt',
            'title' => 'PHP語言',
            'position' => 'row1',
            'icon' => 'bxl-dribbble',
            'subtitle' => NULL,
            'content' => '最簡單，且易學易用的網頁開發程式語言，豐富的程式框架與學習資源，幾乎可用在任何一種網頁伺服器，絕對是開發形象網頁的第一選擇',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 60,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'iconTxt',
            'title' => 'Laravel框架',
            'position' => 'row1',
            'icon' => 'bx-file',
            'subtitle' => NULL,
            'content' => 'PHP框架中當前最熱門的選擇，沒有之一，大量強大易用的套件，讓你能在極短的時間完成創業的Prototype',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'blue',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 1,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 61,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'iconTxt',
            'title' => 'Voyager套件',
            'position' => 'row1',
            'icon' => 'bx-tachometer',
            'subtitle' => NULL,
            'content' => '在多個支持Laravel生成後台套件中，把視覺化作到極致的唯一選擇',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'cyan',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 2,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 62,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'iconTxt',
            'title' => 'EzLaravel',
            'position' => 'row1',
            'icon' => 'bx-world',
            'subtitle' => NULL,
            'content' => '此套件為您展現如何快速採用Laravel&Voyager來實作一個帶後台的形象網站',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'pink',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 3,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 63,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'slider',
            'title' => 'Laravel實戰課程',
            'position' => 'slider',
            'icon' => NULL,
            'subtitle' => '一步步拆解Laravel + Voyager 極速開發術',
            'content' => NULL,
            'url' => 'https://hahow.in/cr/goblinlab-laravel58',
            'url_txt' => '了解課程資訊',
            'pic' => 'images/hero-bg.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => 'botLeft',
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 1,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 64,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'richTxt',
            'title' => '宣傳影片',
            'position' => 'row2',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/service-details-3.jpg',
            'video' => 'https://www.youtube.com/watch?v=Bf6it1XHwk0',
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 65,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'iconTxt',
            'title' => '適合學習對象',
            'position' => 'row2',
            'icon' => 'bx-fingerprint',
            'subtitle' => NULL,
            'content' => '不需要太多網頁技巧，只要有HTML.CSS以及SQL語法概念即可',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 66,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'iconTxt',
            'title' => '我可以學到什麼',
            'position' => 'row2',
            'icon' => 'bx-gift',
            'subtitle' => NULL,
            'content' => '您將能夠學會Laravel的基礎概念，並掌握使用Voyager來進行快速開發的技巧',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 1,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 67,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'txt',
            'title' => '設計特色',
            'position' => 'row3',

            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '以實作為主，教學為輔。直接示範如何使用Laravel & Voyager強強聯手的開發架構來快速實作形象網站',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 68,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'imgText',
            'title' => '管理前台選單',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '

              示範如何製作可以從後台進行修改的前台選單，包含主選單以及Footer連結



選單建構工具

前台取用選單資料

',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/features-3.svg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 1,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 69,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'imgText',
            'title' => '實作前台頁面',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '

             示範如何使用Laravel的Blade機制來製作可重用且方便維護的前台網頁，並支持從資料庫取資料作呈現



 Blade引擎

 Route機制

 實作MVC

',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/features-4.svg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 70,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'imgText',
            'title' => '實作Blog介面',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '

              示範如何製作帶後台管理的Blog介面，包含留言管理功能，保證讓你掌握如何開發Blog



文章列表

文章編輯與管理

留言機制設計

',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/features-1.svg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 2,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 71,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'imgText',
            'title' => '視覺化系統設定',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '

              示範如何將系統設定加以視覺化，把後台架構視覺化，把資料庫結構視覺化。只要學會，維護開發案將無法輕鬆且快速



 系統設定管理員

 資料庫管理員

 BREAD

',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/features-2.svg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 3,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 72,
            'updater_id' => NULL,
            'page' => 'home',
            'mode' => 'imgText',
            'title' => '實作使用者權限',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '

              示範如何讓帳戶具有不同的權限。只要學會，建構帶多種權限的後台系統將輕鬆且快速



 系統權限設定

 用戶管理

 前台權限判斷

',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/features-1.svg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 4,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 73,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'imgText',
            'title' => '我們是哥布林程式學苑',
            'position' => 'row1',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '

              哥布林程式教育學苑專注於全民的程式教育，尤其是網頁應用程式與人工智慧相關課程，如果您對以上內容感到興趣，歡迎到我們的頻道來關注我們，以下是我們正在籌備的課程:



 Laravel8從入門到實戰

 PHP程式極速入門

 資料結構極速入門

 大師談AI


  另外，如果您想更深入的學習Laravel各種機制，歡迎參考我們在Hahow的熱門課程:Laravel5.8從入門到實戰


',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/about.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 74,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'txt',
            'title' => '學員數',
            'position' => 'row2',
            'icon' => NULL,
            'subtitle' => '5,000',
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 75,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'txt',
            'title' => '課堂數',
            'position' => 'row2',
            'icon' => NULL,
            'subtitle' => '500',
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 1,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 76,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'txt',
            'title' => '課時數',
            'position' => 'row2',
            'icon' => NULL,
            'subtitle' => '10,000',
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 2,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 77,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'txt',
            'title' => '老師數',
            'position' => 'row2',
            'icon' => NULL,
            'subtitle' => '2',
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 3,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 78,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'txt',
            'title' => '學前建議具備的能力',
            'position' => 'row3_top',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '為順利您開始Laravel + Voyager的極速開發術的體驗旅程，具備以下技能能確保您在旅途中不會有任何不適的症狀。若是您以下的知識尚不具備也不代表就無法參加這趟旅程，但若有任何症狀，請立刻與我們聯絡。',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 79,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'txt',
            'title' => 'HTML',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => '80',
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 80,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'txt',
            'title' => 'CSS',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => '60',
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 1,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 81,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'txt',
            'title' => 'JavaScript',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => '30',
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 2,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 82,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'txt',
            'title' => 'SQL語法',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => '40',
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 3,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 83,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'txt',
            'title' => '學員評價',
            'position' => 'row4_top',
            'icon' => NULL,
            'subtitle' => '歡迎聽聽看上課學員對於我們課程的心得',
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 84,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'imgText',
            'title' => '沈x弘/MICHAEL',
            'position' => 'row4',
            'icon' => NULL,
            'subtitle' => '大三學生',
            'content' => '在第一次接觸程式時，個人認為那非常的困難，太多的東西需要去理解，不是用背的或者照著寫就能全部理解的東西。會對他產生興趣還是因為在專題的製作過程中有需要，才有去研讀程式，來到這裡先後學習了PHP.JavaScript.HTML and CSS，這在往後學習Laravel會用到，其實在這裡所教會我的就是程式最重要的邏輯概念，還有程式沒有像別人所說的那麼困難，只要你肯花時間去理解與實作，就會發現程式並不困難，所欠缺的只是經驗以及熟練度。 在這裏每次課程結束都會有工作，而且量還滿大的，但這只是讓我們去熟練程式而已，並不是在為難你，既然你選擇了學習，那你就要有相對的付出。所以經過這次的課程指導，其實想學程式並不困難，困難的只是你是否願意付出，有付出一定有收穫，別在乎收穫的如何，給自己一個機會去跟程式做朋友吧。',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/testimonials/testimonials-1.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 85,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'imgText',
            'title' => '孫x驊/PONY',
            'position' => 'row4',
            'icon' => NULL,
            'subtitle' => '大三學生',
            'content' => '從我會寫程式到現在,我一直都以為server是另一種level的東西,可遠觀而不可褻完焉,都覺得超難的不想去接觸到這一塊,但在因緣際會下我進入了這個課程,從一開始基本網頁php學習到現在架設一個完整的網頁server後台,甚至可以在ubuntu環境下架設出一個server,這些是我以前想都沒想過的。哥布林老師教導我們的方式是利用做中學的方式,直接給我們方向,然後我們就要自己去找資料,自己把所要求的結果給呈現出來,一來我們更可以了解到原理,二來也可以增加我們搜尋資料的速度及準確度,再來就是搜尋到的資料多半都是英文,也可以藉由這樣的方式來增加自己的英語能力,這種學習方式是在學校學不到的。所以經過這次的課程指導，其實想學程式並不困難，困難的只是你是否願意付出，有付出一定有收穫，別在乎收穫的如何，給自己一個機會去跟程式做朋友吧。',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/testimonials/testimonials-4.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 1,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 86,
            'updater_id' => NULL,
            'page' => 'about',
            'mode' => 'imgText',
            'title' => '蘇x橙/IVAN',
            'position' => 'row4',
            'icon' => NULL,
            'subtitle' => '大四學生',
            'content' => '在參與Sever程式班課之前，所學會的東西都是從學校圖書館內的書自己去閱讀，按照書上的範例去實作，做出跟書本上一樣的東西，但是如果太過於深入的部分沒有基礎底子的我，完全看不懂內文的程式碼的意思是在解釋些什麼。而開始參與到了Server程式班後，Zack不管以前的基礎好不好，從頭開始的一步一步先開始建立我們的觀念，告訴我們他的寫程式時發生的親身經歷會遇到什麼狀況，如何去解決，並且讓我們著手去實際操作，也很嚴格的要求我們必須要完成每次上完課所交代的功課是否完成，並且有沒有遇到什麼觀念不懂的地方需要再次講解，才會繼續接下去後面的課程。覺得這樣的學習方式跟在學校內是不一樣的，在這裏可以感覺到Zack的想要教給我們的知識，並且希望我們也能夠自己去衍伸出更多所沒有教到的內容，不單只是給你魚，還教你如何釣魚的方法，而在上課的過程中也可以學習到不單只是程式上的部分，在做報告的內容規劃，文書撰寫，等等技巧都能感受到是實務上會發生的事情，並且依照這樣方式可以處理妥事情，覺得在這可以學習到的東西非常的廣。',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/testimonials/testimonials-5.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 2,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 87,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'iconTxt',
            'title' => 'PHP語言',
            'position' => 'row1',
            'icon' => 'bxl-dribbble',
            'subtitle' => NULL,
            'content' => '最簡單，且易學易用的網頁開發程式語言，豐富的程式框架與學習資源，幾乎可用在任何一種網頁伺服器，絕對是開發形象網頁的第一選擇',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 88,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'iconTxt',
            'title' => 'Laravel框架',
            'position' => 'row1',
            'icon' => 'bx-file',
            'subtitle' => NULL,
            'content' => 'PHP框架中當前最熱門的選擇，沒有之一，大量強大易用的套件，讓你能在極短的時間完成創業的Prototype',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'blue',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 1,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 89,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'iconTxt',
            'title' => 'Voyager套件',
            'position' => 'row1',
            'icon' => 'bx-tachometer',
            'subtitle' => NULL,
            'content' => '在多個支持Laravel生成後台套件中，把視覺化作到極致的唯一選擇',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'cyan',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 2,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 90,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'iconTxt',
            'title' => 'EzLaravel',
            'position' => 'row1',
            'icon' => 'bx-world',
            'subtitle' => NULL,
            'content' => '此套件為您展現如何快速採用Laravel&Voyager來實作一個帶後台的形象網站',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'pink',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 3,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 91,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'richTxt',
            'title' => '宣傳影片',
            'position' => 'row2',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => NULL,
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/service-details-3.jpg',
            'video' => 'https://www.youtube.com/watch?v=Bf6it1XHwk0',
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 92,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'iconTxt',
            'title' => '適合學習對象',
            'position' => 'row2',
            'icon' => 'bx-fingerprint',
            'subtitle' => NULL,
            'content' => '不需要太多網頁技巧，只要有HTML.CSS以及SQL語法概念即可',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 93,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'iconTxt',
            'title' => '我可以學到什麼',
            'position' => 'row2',
            'icon' => 'bx-gift',
            'subtitle' => NULL,
            'content' => '您將能夠學會Laravel的基礎概念，並掌握使用Voyager來進行快速開發的技巧',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 1,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 94,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'imgText',
            'title' => '我們的使命',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '創造更好的學習內容，幫助您更好的入門程式技術',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/service-details-1.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 95,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'imgText',
            'title' => '我們的計畫',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '透過線上的方式，帶給您更即時且優質的程式教學內容',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/service-details-2.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 1,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 96,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'imgText',
            'title' => '我們的遠景',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '成為最好的線上程式教學品牌，陪著您在程式開發的事業上前行',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/service-details-3.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 2,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 97,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'imgText',
            'title' => '我們的目標',
            'position' => 'row3',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '能否縮短您入門程式技術的時間，降低陣痛期，並加速您的成功',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/service-details-4.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 3,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 98,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'txt',
            'title' => '價目表',
            'position' => 'price_top',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '我們提供多元的學習方案可供您選擇，且多為免費的，以下僅供您參考之用',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);



        Element::create([
            'id' => 99,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'price',
            'title' => '免費方案',
            'position' => 'prices',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '


 Quam adipiscing vitae proin

 Nec feugiat nisl pretium

 Nulla at volutpat diam uteera

 Pharetra massa massa ultricies

 Massa ultricies mi quis hendrerit

',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => 0,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => '每個月',
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 100,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'price',
            'title' => '超值方案',
            'position' => 'prices',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '


 Quam adipiscing vitae proin

 Nec feugiat nisl pretium

 Nulla at volutpat diam uteera

 Pharetra massa massa ultricies

 Massa ultricies mi quis hendrerit

',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 1,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => 1000,
            'price2' => NULL,
            'isBestPrice' => 1,
            'priceUnit' => '每個月',
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 101,
            'updater_id' => NULL,
            'page' => 'services',
            'mode' => 'price',
            'title' => '企業方案',
            'position' => 'prices',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '


 Quam adipiscing vitae proin

 Nec feugiat nisl pretium

 Nulla at volutpat diam uteera

 Pharetra massa massa ultricies

 Massa ultricies mi quis hendrerit

',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => NULL,
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 2,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => 5000,
            'price2' => NULL,
            'isBestPrice' => 1,
            'priceUnit' => '每個月',
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);


        Element::create([
            'id' => 102,
            'updater_id' => NULL,
            'page' => 'thank',
            'mode' => 'imgText',
            'title' => '感謝您的反饋',
            'position' => 'row1',
            'icon' => NULL,
            'subtitle' => NULL,
            'content' => '我們將在收到您的訊息之後，三天內回覆您，同時您也將得到會員的專屬優惠。',
            'url' => '#',
            'url_txt' => NULL,
            'pic' => 'images/service-details-2.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => 0,
            'enabled' => 1,
            'isShowTitle' => 1,
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ]);
    }
}
