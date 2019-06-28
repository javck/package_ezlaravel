<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyMenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("menu_items")->truncate();

        DB::table("menu_items")->insert( [
		'id'=>1,
		'menu_id'=>1,
		'title'=>'控制面板',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-boat',
		'color'=>NULL,
		'parent_id'=>NULL,
		'order'=>1,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-03-01 12:23:56',
		'route'=>'voyager.dashboard',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>2,
		'menu_id'=>1,
		'title'=>'媒體管理員',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-images',
		'color'=>'#000000',
		'parent_id'=>5,
		'order'=>2,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-26 08:28:47',
		'route'=>'voyager.media.index',
		'parameters'=>'null'
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>3,
		'menu_id'=>1,
		'title'=>'使用者',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-person',
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>3,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 15:51:01',
		'route'=>'voyager.users.index',
		'parameters'=>'null'
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>4,
		'menu_id'=>1,
		'title'=>'角色',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-lock',
		'color'=>NULL,
		'parent_id'=>NULL,
		'order'=>2,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-03-01 12:23:56',
		'route'=>'voyager.roles.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>5,
		'menu_id'=>1,
		'title'=>'工具',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-tools',
		'color'=>NULL,
		'parent_id'=>NULL,
		'order'=>15,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-26 08:28:47',
		'route'=>NULL,
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>6,
		'menu_id'=>1,
		'title'=>'選單管理',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-list',
		'color'=>'#000000',
		'parent_id'=>5,
		'order'=>1,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-03-07 00:46:16',
		'route'=>'voyager.menus.index',
		'parameters'=>'null'
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>7,
		'menu_id'=>1,
		'title'=>'資料庫',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-data',
		'color'=>NULL,
		'parent_id'=>5,
		'order'=>3,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-26 08:28:47',
		'route'=>'voyager.database.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>8,
		'menu_id'=>1,
		'title'=>'指南針',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-compass',
		'color'=>NULL,
		'parent_id'=>5,
		'order'=>4,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-26 08:28:47',
		'route'=>'voyager.compass.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>9,
		'menu_id'=>1,
		'title'=>'BREAD',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-bread',
		'color'=>NULL,
		'parent_id'=>5,
		'order'=>5,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-26 08:28:47',
		'route'=>'voyager.bread.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>10,
		'menu_id'=>1,
		'title'=>'設定',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-settings',
		'color'=>NULL,
		'parent_id'=>5,
		'order'=>6,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-26 08:28:47',
		'route'=>'voyager.settings.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>11,
		'menu_id'=>1,
		'title'=>'Hooks',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-hook',
		'color'=>NULL,
		'parent_id'=>5,
		'order'=>7,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-26 08:28:47',
		'route'=>'voyager.hooks',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>12,
		'menu_id'=>1,
		'title'=>'文章集',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-file-text',
		'color'=>NULL,
		'parent_id'=>NULL,
		'order'=>9,
		'created_at'=>'2019-02-11 14:49:57',
		'updated_at'=>'2019-02-23 06:17:52',
		'route'=>'voyager.articles.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>13,
		'menu_id'=>1,
		'title'=>'分類集',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-categories',
		'color'=>NULL,
		'parent_id'=>NULL,
		'order'=>8,
		'created_at'=>'2019-02-11 14:50:46',
		'updated_at'=>'2019-02-23 07:08:24',
		'route'=>'voyager.cgys.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>14,
		'menu_id'=>1,
		'title'=>'留言集',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-bubble',
		'color'=>NULL,
		'parent_id'=>NULL,
		'order'=>12,
		'created_at'=>'2019-02-11 14:52:14',
		'updated_at'=>'2019-02-23 07:39:14',
		'route'=>'voyager.comments.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>15,
		'menu_id'=>1,
		'title'=>'聯絡單集',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-mail',
		'color'=>NULL,
		'parent_id'=>NULL,
		'order'=>5,
		'created_at'=>'2019-02-11 14:53:06',
		'updated_at'=>'2019-02-23 07:08:26',
		'route'=>'voyager.contacts.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>16,
		'menu_id'=>1,
		'title'=>'網頁元素集',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-puzzle',
		'color'=>NULL,
		'parent_id'=>NULL,
		'order'=>6,
		'created_at'=>'2019-02-11 14:57:08',
		'updated_at'=>'2019-02-23 07:08:26',
		'route'=>'voyager.elements.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>17,
		'menu_id'=>1,
		'title'=>'多媒體集',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-photos',
		'color'=>NULL,
		'parent_id'=>NULL,
		'order'=>7,
		'created_at'=>'2019-02-11 14:57:58',
		'updated_at'=>'2019-02-23 07:08:26',
		'route'=>'voyager.medias.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>18,
		'menu_id'=>1,
		'title'=>'合作夥伴集',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-trophy',
		'color'=>NULL,
		'parent_id'=>NULL,
		'order'=>13,
		'created_at'=>'2019-02-11 15:01:08',
		'updated_at'=>'2019-02-23 06:17:52',
		'route'=>'voyager.partners.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>20,
		'menu_id'=>1,
		'title'=>'標籤集',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>'voyager-tag',
		'color'=>NULL,
		'parent_id'=>NULL,
		'order'=>11,
		'created_at'=>'2019-02-11 15:04:01',
		'updated_at'=>'2019-02-23 07:39:14',
		'route'=>'voyager.tags.index',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>23,
		'menu_id'=>2,
		'title'=>'關於永元宮',
		'url'=>'/articles/cgys/28',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>2,
		'created_at'=>'2019-03-07 00:02:36',
		'updated_at'=>'2019-03-10 07:04:28',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>24,
		'menu_id'=>2,
		'title'=>'永元宮神明',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>3,
		'created_at'=>'2019-03-07 00:02:57',
		'updated_at'=>'2019-03-07 00:06:41',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>25,
		'menu_id'=>2,
		'title'=>'最新消息',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>4,
		'created_at'=>'2019-03-07 00:03:10',
		'updated_at'=>'2019-03-07 00:06:41',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>26,
		'menu_id'=>2,
		'title'=>'永元宮記事',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>5,
		'created_at'=>'2019-03-07 00:03:26',
		'updated_at'=>'2019-03-07 00:06:41',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>27,
		'menu_id'=>2,
		'title'=>'服務項目',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>6,
		'created_at'=>'2019-03-07 00:03:40',
		'updated_at'=>'2019-03-07 00:06:41',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>28,
		'menu_id'=>2,
		'title'=>'影片專區',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>7,
		'created_at'=>'2019-03-07 00:03:50',
		'updated_at'=>'2019-03-07 00:06:41',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>29,
		'menu_id'=>2,
		'title'=>'聯絡我們',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>9,
		'created_at'=>'2019-03-07 00:04:16',
		'updated_at'=>'2019-03-10 07:31:59',
		'route'=>'contact-us',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>30,
		'menu_id'=>2,
		'title'=>'首頁',
		'url'=>'/',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>1,
		'created_at'=>'2019-03-07 00:04:37',
		'updated_at'=>'2019-03-07 00:04:43',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>32,
		'menu_id'=>2,
		'title'=>'FB專區',
		'url'=>'www.facebook.com',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>8,
		'created_at'=>'2019-03-07 00:05:35',
		'updated_at'=>'2019-03-10 07:31:59',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>33,
		'menu_id'=>2,
		'title'=>'廟宇起源',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>23,
		'order'=>1,
		'created_at'=>'2019-03-07 00:06:23',
		'updated_at'=>'2019-03-07 00:06:41',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>34,
		'menu_id'=>2,
		'title'=>'玄聖父母殿',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>23,
		'order'=>2,
		'created_at'=>'2019-03-07 00:06:57',
		'updated_at'=>'2019-03-07 00:07:44',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>35,
		'menu_id'=>2,
		'title'=>'廟宇建築',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>23,
		'order'=>3,
		'created_at'=>'2019-03-07 00:07:11',
		'updated_at'=>'2019-03-07 00:07:50',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>36,
		'menu_id'=>2,
		'title'=>'廟宇文物',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>23,
		'order'=>4,
		'created_at'=>'2019-03-07 00:07:25',
		'updated_at'=>'2019-03-07 00:07:56',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>37,
		'menu_id'=>2,
		'title'=>'廟宇團隊',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>23,
		'order'=>5,
		'created_at'=>'2019-03-07 00:07:37',
		'updated_at'=>'2019-03-07 00:08:01',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>38,
		'menu_id'=>2,
		'title'=>'神明介紹',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>24,
		'order'=>1,
		'created_at'=>'2019-03-07 00:08:18',
		'updated_at'=>'2019-03-07 00:09:01',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>39,
		'menu_id'=>2,
		'title'=>'神威神蹟',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>24,
		'order'=>2,
		'created_at'=>'2019-03-07 00:08:30',
		'updated_at'=>'2019-03-07 00:09:05',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>40,
		'menu_id'=>2,
		'title'=>'神明聖誕',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>24,
		'order'=>3,
		'created_at'=>'2019-03-07 00:08:41',
		'updated_at'=>'2019-03-07 00:09:09',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>41,
		'menu_id'=>2,
		'title'=>'祭祀儀式',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>24,
		'order'=>4,
		'created_at'=>'2019-03-07 00:08:53',
		'updated_at'=>'2019-03-07 00:09:12',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>42,
		'menu_id'=>2,
		'title'=>'大事年表',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>26,
		'order'=>1,
		'created_at'=>'2019-03-07 00:09:24',
		'updated_at'=>'2019-03-07 00:09:55',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>43,
		'menu_id'=>2,
		'title'=>'大紀典',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>26,
		'order'=>2,
		'created_at'=>'2019-03-07 00:09:37',
		'updated_at'=>'2019-03-07 00:10:00',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>44,
		'menu_id'=>2,
		'title'=>'活動花絮',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>26,
		'order'=>3,
		'created_at'=>'2019-03-07 00:09:47',
		'updated_at'=>'2019-03-07 00:10:03',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>45,
		'menu_id'=>3,
		'title'=>'服務項目',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>16,
		'created_at'=>'2019-03-07 00:47:20',
		'updated_at'=>'2019-03-07 00:47:20',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>46,
		'menu_id'=>3,
		'title'=>'聯絡我們',
		'url'=>'',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>17,
		'created_at'=>'2019-03-07 00:47:37',
		'updated_at'=>'2019-03-07 00:47:37',
		'route'=>'contact-us',
		'parameters'=>NULL
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>47,
		'menu_id'=>3,
		'title'=>'FB專區',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>18,
		'created_at'=>'2019-03-07 00:47:55',
		'updated_at'=>'2019-03-07 00:47:55',
		'route'=>NULL,
		'parameters'=>''
		] );


					
		DB::table("menu_items")->insert( [
		'id'=>48,
		'menu_id'=>3,
		'title'=>'職員專區',
		'url'=>'#',
		'target'=>'_self',
		'icon_class'=>NULL,
		'color'=>'#000000',
		'parent_id'=>NULL,
		'order'=>19,
		'created_at'=>'2019-03-07 00:48:11',
		'updated_at'=>'2019-03-07 00:48:11',
		'route'=>NULL,
		'parameters'=>''
		] );
    }
}
