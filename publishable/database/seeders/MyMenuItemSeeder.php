<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\MenuItem;

class MyMenuItemSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        MenuItem::truncate();

        MenuItem::create([
            'id' => 1,
            'menu_id' => 1,
            'title' => '控制面板',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-boat',
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 1,
            'created_at' => '2019-02-11 06:24:41',
            'updated_at' => '2020-10-31 14:10:07',
            'route' => 'voyager.dashboard',
            'parameters' => 'null'
        ]);



        MenuItem::create([
            'id' => 2,
            'menu_id' => 1,
            'title' => '媒體管理員',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-images',
            'color' => '#000000',
            'parent_id' => 5,
            'order' => 2,
            'created_at' => '2019-02-11 06:24:41',
            'updated_at' => '2019-02-26 00:28:47',
            'route' => 'voyager.media.index',
            'parameters' => 'null'
        ]);



        MenuItem::create([
            'id' => 3,
            'menu_id' => 1,
            'title' => '使用者',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-person',
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 2,
            'created_at' => '2019-02-11 06:24:41',
            'updated_at' => '2020-10-31 14:10:07',
            'route' => 'voyager.users.index',
            'parameters' => 'null'
        ]);



        MenuItem::create([
            'id' => 4,
            'menu_id' => 1,
            'title' => '角色',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-lock',
            'color' => NULL,
            'parent_id' => NULL,
            'order' => 3,
            'created_at' => '2019-02-11 06:24:41',
            'updated_at' => '2020-10-31 14:11:18',
            'route' => 'voyager.roles.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 5,
            'menu_id' => 1,
            'title' => '工具',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-tools',
            'color' => NULL,
            'parent_id' => NULL,
            'order' => 11,
            'created_at' => '2019-02-11 06:24:41',
            'updated_at' => '2020-10-31 20:55:57',
            'route' => NULL,
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 6,
            'menu_id' => 1,
            'title' => '選單管理',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-list',
            'color' => '#000000',
            'parent_id' => 5,
            'order' => 1,
            'created_at' => '2019-02-11 06:24:41',
            'updated_at' => '2019-03-06 16:46:16',
            'route' => 'voyager.menus.index',
            'parameters' => 'null'
        ]);



        MenuItem::create([
            'id' => 7,
            'menu_id' => 1,
            'title' => '資料庫',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-data',
            'color' => NULL,
            'parent_id' => 5,
            'order' => 3,
            'created_at' => '2019-02-11 06:24:41',
            'updated_at' => '2019-02-26 00:28:47',
            'route' => 'voyager.database.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 8,
            'menu_id' => 1,
            'title' => '指南針',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-compass',
            'color' => NULL,
            'parent_id' => 5,
            'order' => 4,
            'created_at' => '2019-02-11 06:24:41',
            'updated_at' => '2019-02-26 00:28:47',
            'route' => 'voyager.compass.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 9,
            'menu_id' => 1,
            'title' => 'BREAD',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-bread',
            'color' => NULL,
            'parent_id' => 5,
            'order' => 5,
            'created_at' => '2019-02-11 06:24:41',
            'updated_at' => '2019-02-26 00:28:47',
            'route' => 'voyager.bread.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 10,
            'menu_id' => 1,
            'title' => '設定',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-settings',
            'color' => NULL,
            'parent_id' => 5,
            'order' => 6,
            'created_at' => '2019-02-11 06:24:41',
            'updated_at' => '2019-02-26 00:28:47',
            'route' => 'voyager.settings.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 11,
            'menu_id' => 1,
            'title' => 'Hooks',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-hook',
            'color' => NULL,
            'parent_id' => 5,
            'order' => 7,
            'created_at' => '2019-02-11 06:24:41',
            'updated_at' => '2019-02-26 00:28:47',
            'route' => 'voyager.hooks',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 12,
            'menu_id' => 1,
            'title' => '文章集',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-file-text',
            'color' => NULL,
            'parent_id' => 30,
            'order' => 3,
            'created_at' => '2019-02-11 06:49:57',
            'updated_at' => '2020-10-31 20:55:54',
            'route' => 'voyager.articles.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 13,
            'menu_id' => 1,
            'title' => '分類集',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-categories',
            'color' => NULL,
            'parent_id' => NULL,
            'order' => 5,
            'created_at' => '2019-02-11 06:50:46',
            'updated_at' => '2020-10-31 20:55:11',
            'route' => 'voyager.cgys.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 14,
            'menu_id' => 1,
            'title' => '留言集',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-bubble',
            'color' => NULL,
            'parent_id' => 30,
            'order' => 4,
            'created_at' => '2019-02-11 06:52:14',
            'updated_at' => '2020-10-31 20:55:57',
            'route' => 'voyager.comments.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 15,
            'menu_id' => 1,
            'title' => '聯絡單集',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-mail',
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 10,
            'created_at' => '2019-02-11 06:53:06',
            'updated_at' => '2020-10-31 20:55:57',
            'route' => 'voyager.contacts.index',
            'parameters' => 'null'
        ]);



        MenuItem::create([
            'id' => 16,
            'menu_id' => 1,
            'title' => '網頁元素集',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-puzzle',
            'color' => '#000000',
            'parent_id' => 30,
            'order' => 1,
            'created_at' => '2019-02-11 06:57:08',
            'updated_at' => '2020-10-31 20:55:49',
            'route' => 'voyager.elements.index',
            'parameters' => 'null'
        ]);



        MenuItem::create([
            'id' => 17,
            'menu_id' => 1,
            'title' => '作品集',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-photos',
            'color' => '#000000',
            'parent_id' => 30,
            'order' => 2,
            'created_at' => '2019-02-11 06:57:58',
            'updated_at' => '2020-10-31 20:55:53',
            'route' => 'voyager.portfolios.index',
            'parameters' => 'null'
        ]);



        MenuItem::create([
            'id' => 18,
            'menu_id' => 1,
            'title' => '合作夥伴集',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-trophy',
            'color' => NULL,
            'parent_id' => 31,
            'order' => 3,
            'created_at' => '2019-02-11 07:01:08',
            'updated_at' => '2020-10-31 14:13:12',
            'route' => 'voyager.partners.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 20,
            'menu_id' => 1,
            'title' => '標籤集',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-tag',
            'color' => NULL,
            'parent_id' => NULL,
            'order' => 6,
            'created_at' => '2019-02-11 07:04:01',
            'updated_at' => '2020-10-31 20:55:11',
            'route' => 'voyager.tags.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 21,
            'menu_id' => 3,
            'title' => '最新消息',
            'url' => '/demo/articles/1',
            'target' => '_self',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => 35,
            'order' => 3,
            'created_at' => '2019-03-06 16:47:20',
            'updated_at' => '2020-11-05 18:03:19',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 22,
            'menu_id' => 3,
            'title' => '聯絡我們',
            'url' => '/demo/contact',
            'target' => '_self',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => 35,
            'order' => 4,
            'created_at' => '2019-03-06 16:47:37',
            'updated_at' => '2020-11-02 01:06:37',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 23,
            'menu_id' => 3,
            'title' => '提供服務',
            'url' => '/demo/services',
            'target' => '_self',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => 35,
            'order' => 2,
            'created_at' => '2019-03-06 16:47:55',
            'updated_at' => '2020-11-02 01:06:24',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 24,
            'menu_id' => 3,
            'title' => '後台',
            'url' => 'admin',
            'target' => '_blank',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => 37,
            'order' => 1,
            'created_at' => '2019-03-06 16:48:11',
            'updated_at' => '2020-11-01 16:13:19',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 25,
            'menu_id' => 5,
            'title' => '示範頁',
            'url' => '#',
            'target' => '_self',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 1,
            'created_at' => '2019-03-31 04:29:46',
            'updated_at' => '2020-11-05 17:56:11',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 26,
            'menu_id' => 5,
            'title' => 'Laravel官網',
            'url' => 'https://laravel.com/',
            'target' => '_blank',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 2,
            'created_at' => '2019-03-31 04:30:07',
            'updated_at' => '2020-11-01 20:57:20',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 27,
            'menu_id' => 5,
            'title' => 'Demo網頁',
            'url' => 'https://demo.goblinlab.org',
            'target' => '_blank',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 4,
            'created_at' => '2019-03-31 04:38:40',
            'updated_at' => '2020-11-05 02:13:56',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 28,
            'menu_id' => 1,
            'title' => '商品集',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-basket',
            'color' => '#000000',
            'parent_id' => 31,
            'order' => 1,
            'created_at' => '2019-08-14 05:23:36',
            'updated_at' => '2020-10-31 14:13:09',
            'route' => 'voyager.items.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 29,
            'menu_id' => 1,
            'title' => '訂單集',
            'url' => '/admin/orders',
            'target' => '_self',
            'icon_class' => 'voyager-buy',
            'color' => '#000000',
            'parent_id' => 31,
            'order' => 2,
            'created_at' => '2019-08-14 12:21:26',
            'updated_at' => '2020-10-31 14:13:12',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 30,
            'menu_id' => 1,
            'title' => '網頁相關',
            'url' => '#',
            'target' => '_self',
            'icon_class' => 'voyager-puzzle',
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 8,
            'created_at' => '2020-10-31 14:10:52',
            'updated_at' => '2020-10-31 20:56:14',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 31,
            'menu_id' => 1,
            'title' => '網店相關',
            'url' => '#',
            'target' => '_self',
            'icon_class' => 'voyager-bag',
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 9,
            'created_at' => '2020-10-31 14:12:47',
            'updated_at' => '2020-10-31 20:55:57',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 32,
            'menu_id' => 1,
            'title' => '媒體',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-images',
            'color' => NULL,
            'parent_id' => NULL,
            'order' => 7,
            'created_at' => '2020-10-31 20:48:45',
            'updated_at' => '2020-10-31 20:55:11',
            'route' => 'voyager.media.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 33,
            'menu_id' => 1,
            'title' => '用戶',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-person',
            'color' => NULL,
            'parent_id' => NULL,
            'order' => 4,
            'created_at' => '2020-10-31 20:48:45',
            'updated_at' => '2020-10-31 20:55:11',
            'route' => 'voyager.users.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 34,
            'menu_id' => 1,
            'title' => '側邊欄管理',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-list',
            'color' => NULL,
            'parent_id' => 5,
            'order' => 8,
            'created_at' => '2020-10-31 20:48:45',
            'updated_at' => '2020-10-31 20:55:11',
            'route' => 'voyager.menus.index',
            'parameters' => NULL
        ]);



        MenuItem::create([
            'id' => 35,
            'menu_id' => 3,
            'title' => '傳送門',
            'url' => '#',
            'target' => '_self',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 1,
            'created_at' => '2020-11-01 16:11:42',
            'updated_at' => '2020-11-01 16:13:19',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 36,
            'menu_id' => 3,
            'title' => '關於我們',
            'url' => '/demo/about',
            'target' => '_self',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => 35,
            'order' => 1,
            'created_at' => '2020-11-01 16:12:34',
            'updated_at' => '2020-11-02 01:06:18',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 37,
            'menu_id' => 3,
            'title' => '其他連結',
            'url' => '#',
            'target' => '_self',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 2,
            'created_at' => '2020-11-01 16:13:13',
            'updated_at' => '2020-11-01 16:13:19',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 38,
            'menu_id' => 5,
            'title' => 'Voyager套件官網',
            'url' => 'https://voyager.devdojo.com/',
            'target' => '_blank',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 3,
            'created_at' => '2020-11-01 20:56:31',
            'updated_at' => '2020-11-01 20:57:25',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 39,
            'menu_id' => 5,
            'title' => 'EzLaravel套件',
            'url' => 'https://packagist.org/packages/javck/ezlaravel',
            'target' => '_blank',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 5,
            'created_at' => '2020-11-01 20:56:53',
            'updated_at' => '2020-11-05 02:15:22',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 40,
            'menu_id' => 5,
            'title' => '首頁',
            'url' => '/demo',
            'target' => '_self',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => 25,
            'order' => 1,
            'created_at' => '2020-11-05 17:56:25',
            'updated_at' => '2020-11-05 17:56:29',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 41,
            'menu_id' => 5,
            'title' => '關於我們',
            'url' => '/demo/about',
            'target' => '_self',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => 25,
            'order' => 2,
            'created_at' => '2020-11-05 17:56:54',
            'updated_at' => '2020-11-05 17:57:00',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 42,
            'menu_id' => 5,
            'title' => '提供服務',
            'url' => '/demo/services',
            'target' => '_self',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => 25,
            'order' => 3,
            'created_at' => '2020-11-05 17:57:22',
            'updated_at' => '2020-11-05 17:57:26',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 43,
            'menu_id' => 5,
            'title' => '最新消息',
            'url' => '/demo/articles/1',
            'target' => '_self',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => 25,
            'order' => 4,
            'created_at' => '2020-11-05 17:57:48',
            'updated_at' => '2020-11-05 17:58:12',
            'route' => NULL,
            'parameters' => ''
        ]);



        MenuItem::create([
            'id' => 44,
            'menu_id' => 5,
            'title' => '聯絡我們',
            'url' => '/demo/contact',
            'target' => '_self',
            'icon_class' => NULL,
            'color' => '#000000',
            'parent_id' => 25,
            'order' => 5,
            'created_at' => '2020-11-05 17:58:08',
            'updated_at' => '2020-11-05 17:58:14',
            'route' => NULL,
            'parameters' => ''
        ]);
    }
}
