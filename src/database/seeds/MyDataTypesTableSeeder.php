<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyDataTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("data_types")->truncate();

        DB::table("data_types")->insert( [
		'id'=>1,
		'name'=>'users',
		'slug'=>'users',
		'display_name_singular'=>'使用者',
		'display_name_plural'=>'使用者集',
		'icon'=>'voyager-person',
		'model_name'=>'TCG\\Voyager\\Models\\User',
		'policy_name'=>'App\\Policies\\UserPolicy',
		'controller'=>NULL,
		'description'=>'使用者表格',
		'generate_permissions'=>1,
		'server_side'=>1,
		'details'=>'{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null}',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-03-12 06:10:34'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>2,
		'name'=>'menus',
		'slug'=>'menus',
		'display_name_singular'=>'側邊欄',
		'display_name_plural'=>'側邊欄',
		'icon'=>'voyager-list',
		'model_name'=>'TCG\\Voyager\\Models\\Menu',
		'policy_name'=>NULL,
		'controller'=>'',
		'description'=>'',
		'generate_permissions'=>1,
		'server_side'=>0,
		'details'=>NULL,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>3,
		'name'=>'roles',
		'slug'=>'roles',
		'display_name_singular'=>'角色',
		'display_name_plural'=>'角色',
		'icon'=>'voyager-lock',
		'model_name'=>'TCG\\Voyager\\Models\\Role',
		'policy_name'=>NULL,
		'controller'=>'',
		'description'=>'',
		'generate_permissions'=>1,
		'server_side'=>0,
		'details'=>NULL,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>4,
		'name'=>'articles',
		'slug'=>'articles',
		'display_name_singular'=>'文章',
		'display_name_plural'=>'文章集',
		'icon'=>'voyager-file-text',
		'model_name'=>'App\\Article',
		'policy_name'=>NULL,
		'controller'=>NULL,
		'description'=>'文章表格',
		'generate_permissions'=>1,
		'server_side'=>1,
		'details'=>'{"order_column":"created_at","order_display_column":"created_at","order_direction":"desc","default_search_key":null}',
		'created_at'=>'2019-02-11 14:49:57',
		'updated_at'=>'2019-03-11 09:50:33'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>5,
		'name'=>'cgys',
		'slug'=>'cgys',
		'display_name_singular'=>'分類',
		'display_name_plural'=>'分類集',
		'icon'=>'voyager-categories',
		'model_name'=>'App\\Cgy',
		'policy_name'=>NULL,
		'controller'=>NULL,
		'description'=>'分類表格',
		'generate_permissions'=>1,
		'server_side'=>1,
		'details'=>'{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
		'created_at'=>'2019-02-11 14:50:46',
		'updated_at'=>'2019-03-11 09:51:10'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>6,
		'name'=>'comments',
		'slug'=>'comments',
		'display_name_singular'=>'留言',
		'display_name_plural'=>'留言集',
		'icon'=>'voyager-bubble',
		'model_name'=>'App\\Comment',
		'policy_name'=>NULL,
		'controller'=>NULL,
		'description'=>'留言表格',
		'generate_permissions'=>1,
		'server_side'=>1,
		'details'=>'{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
		'created_at'=>'2019-02-11 14:52:14',
		'updated_at'=>'2019-03-11 09:53:30'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>7,
		'name'=>'contacts',
		'slug'=>'contacts',
		'display_name_singular'=>'聯絡單',
		'display_name_plural'=>'聯絡單集',
		'icon'=>'voyager-mail',
		'model_name'=>'App\\Contact',
		'policy_name'=>NULL,
		'controller'=>NULL,
		'description'=>'聯絡單表格',
		'generate_permissions'=>1,
		'server_side'=>1,
		'details'=>'{"order_column":"created_at","order_display_column":null,"order_direction":"desc","default_search_key":null}',
		'created_at'=>'2019-02-11 14:53:06',
		'updated_at'=>'2019-03-11 09:57:23'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>8,
		'name'=>'elements',
		'slug'=>'elements',
		'display_name_singular'=>'網頁元素',
		'display_name_plural'=>'網頁元素集',
		'icon'=>'voyager-puzzle',
		'model_name'=>'App\\Element',
		'policy_name'=>NULL,
		'controller'=>'MyVoyagerElementController',
		'description'=>'網頁元素表格',
		'generate_permissions'=>1,
		'server_side'=>1,
		'details'=>'{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
		'created_at'=>'2019-02-11 14:57:08',
		'updated_at'=>'2019-03-11 09:59:12'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>9,
		'name'=>'medias',
		'slug'=>'medias',
		'display_name_singular'=>'多媒體',
		'display_name_plural'=>'多媒體集',
		'icon'=>'voyager-photos',
		'model_name'=>'App\\Media',
		'policy_name'=>NULL,
		'controller'=>NULL,
		'description'=>'多媒體表格',
		'generate_permissions'=>1,
		'server_side'=>1,
		'details'=>'{"order_column":"sort","order_display_column":"sort","order_direction":"asc","default_search_key":"sort"}',
		'created_at'=>'2019-02-11 14:57:58',
		'updated_at'=>'2019-02-28 01:36:05'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>10,
		'name'=>'partners',
		'slug'=>'partners',
		'display_name_singular'=>'合作夥伴',
		'display_name_plural'=>'合作夥伴集',
		'icon'=>'voyager-trophy',
		'model_name'=>'App\\Partner',
		'policy_name'=>NULL,
		'controller'=>NULL,
		'description'=>'合作夥伴表格',
		'generate_permissions'=>1,
		'server_side'=>1,
		'details'=>'{"order_column":"sort","order_display_column":"sort","order_direction":"asc","default_search_key":null}',
		'created_at'=>'2019-02-11 15:01:08',
		'updated_at'=>'2019-02-16 13:24:57'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>11,
		'name'=>'serials',
		'slug'=>'serials',
		'display_name_singular'=>'序號',
		'display_name_plural'=>'序號集',
		'icon'=>'voyager-gift',
		'model_name'=>'App\\Serial',
		'policy_name'=>NULL,
		'controller'=>NULL,
		'description'=>'序號表格',
		'generate_permissions'=>1,
		'server_side'=>1,
		'details'=>'{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
		'created_at'=>'2019-02-11 15:03:26',
		'updated_at'=>'2019-02-16 13:47:06'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>12,
		'name'=>'tags',
		'slug'=>'tags',
		'display_name_singular'=>'標籤',
		'display_name_plural'=>'標籤集',
		'icon'=>'voyager-tag',
		'model_name'=>'App\\Tag',
		'policy_name'=>NULL,
		'controller'=>NULL,
		'description'=>'標籤表格',
		'generate_permissions'=>1,
		'server_side'=>1,
		'details'=>'{"order_column":"sort","order_display_column":"sort","order_direction":"asc","default_search_key":"sort"}',
		'created_at'=>'2019-02-11 15:04:01',
		'updated_at'=>'2019-02-13 14:11:16'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>13,
		'name'=>'orders',
		'slug'=>'orders',
		'display_name_singular'=>'訂單',
		'display_name_plural'=>'訂單集',
		'icon'=>'voyager-bag',
		'model_name'=>'App\\Order',
		'policy_name'=>NULL,
		'controller'=>NULL,
		'description'=>'訂單表格',
		'generate_permissions'=>1,
		'server_side'=>1,
		'details'=>'{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
		'created_at'=>'2019-02-16 13:38:07',
		'updated_at'=>'2019-02-23 07:42:58'
		] );


					
		DB::table("data_types")->insert( [
		'id'=>14,
		'name'=>'consolidations',
		'slug'=>'consolidations',
		'display_name_singular'=>'集運單',
		'display_name_plural'=>'集運單集',
		'icon'=>'voyager-truck',
		'model_name'=>'App\\Consolidation',
		'policy_name'=>NULL,
		'controller'=>'ConsolidationController',
		'description'=>'集運表單',
		'generate_permissions'=>1,
		'server_side'=>1,
		'details'=>'{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
		'created_at'=>'2019-02-08 19:32:20',
		'updated_at'=>'2019-02-23 07:14:20'
		] );
    }
}
