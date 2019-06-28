<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table("permissions")->truncate();
    	
        DB::table("permissions")->insert( [
		'id'=>1,
		'key'=>'browse_admin',
		'table_name'=>NULL,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>2,
		'key'=>'browse_bread',
		'table_name'=>NULL,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>3,
		'key'=>'browse_database',
		'table_name'=>NULL,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>4,
		'key'=>'browse_media',
		'table_name'=>NULL,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>5,
		'key'=>'browse_compass',
		'table_name'=>NULL,
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>6,
		'key'=>'browse_menus',
		'table_name'=>'menus',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>7,
		'key'=>'read_menus',
		'table_name'=>'menus',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>8,
		'key'=>'edit_menus',
		'table_name'=>'menus',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>9,
		'key'=>'add_menus',
		'table_name'=>'menus',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>10,
		'key'=>'delete_menus',
		'table_name'=>'menus',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>11,
		'key'=>'browse_roles',
		'table_name'=>'roles',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>12,
		'key'=>'read_roles',
		'table_name'=>'roles',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>13,
		'key'=>'edit_roles',
		'table_name'=>'roles',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>14,
		'key'=>'add_roles',
		'table_name'=>'roles',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>15,
		'key'=>'delete_roles',
		'table_name'=>'roles',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>16,
		'key'=>'browse_users',
		'table_name'=>'users',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>17,
		'key'=>'read_users',
		'table_name'=>'users',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>18,
		'key'=>'edit_users',
		'table_name'=>'users',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>19,
		'key'=>'add_users',
		'table_name'=>'users',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>20,
		'key'=>'delete_users',
		'table_name'=>'users',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>21,
		'key'=>'browse_settings',
		'table_name'=>'settings',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>22,
		'key'=>'read_settings',
		'table_name'=>'settings',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>23,
		'key'=>'edit_settings',
		'table_name'=>'settings',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>24,
		'key'=>'add_settings',
		'table_name'=>'settings',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>25,
		'key'=>'delete_settings',
		'table_name'=>'settings',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>26,
		'key'=>'browse_hooks',
		'table_name'=>NULL,
		'created_at'=>'2019-02-11 14:24:42',
		'updated_at'=>'2019-02-11 14:24:42'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>27,
		'key'=>'browse_articles',
		'table_name'=>'articles',
		'created_at'=>'2019-02-11 14:49:57',
		'updated_at'=>'2019-02-11 14:49:57'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>28,
		'key'=>'read_articles',
		'table_name'=>'articles',
		'created_at'=>'2019-02-11 14:49:57',
		'updated_at'=>'2019-02-11 14:49:57'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>29,
		'key'=>'edit_articles',
		'table_name'=>'articles',
		'created_at'=>'2019-02-11 14:49:57',
		'updated_at'=>'2019-02-11 14:49:57'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>30,
		'key'=>'add_articles',
		'table_name'=>'articles',
		'created_at'=>'2019-02-11 14:49:57',
		'updated_at'=>'2019-02-11 14:49:57'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>31,
		'key'=>'delete_articles',
		'table_name'=>'articles',
		'created_at'=>'2019-02-11 14:49:57',
		'updated_at'=>'2019-02-11 14:49:57'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>32,
		'key'=>'browse_cgys',
		'table_name'=>'cgys',
		'created_at'=>'2019-02-11 14:50:46',
		'updated_at'=>'2019-02-11 14:50:46'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>33,
		'key'=>'read_cgys',
		'table_name'=>'cgys',
		'created_at'=>'2019-02-11 14:50:46',
		'updated_at'=>'2019-02-11 14:50:46'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>34,
		'key'=>'edit_cgys',
		'table_name'=>'cgys',
		'created_at'=>'2019-02-11 14:50:46',
		'updated_at'=>'2019-02-11 14:50:46'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>35,
		'key'=>'add_cgys',
		'table_name'=>'cgys',
		'created_at'=>'2019-02-11 14:50:46',
		'updated_at'=>'2019-02-11 14:50:46'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>36,
		'key'=>'delete_cgys',
		'table_name'=>'cgys',
		'created_at'=>'2019-02-11 14:50:46',
		'updated_at'=>'2019-02-11 14:50:46'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>37,
		'key'=>'browse_comments',
		'table_name'=>'comments',
		'created_at'=>'2019-02-11 14:52:14',
		'updated_at'=>'2019-02-11 14:52:14'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>38,
		'key'=>'read_comments',
		'table_name'=>'comments',
		'created_at'=>'2019-02-11 14:52:14',
		'updated_at'=>'2019-02-11 14:52:14'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>39,
		'key'=>'edit_comments',
		'table_name'=>'comments',
		'created_at'=>'2019-02-11 14:52:14',
		'updated_at'=>'2019-02-11 14:52:14'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>40,
		'key'=>'add_comments',
		'table_name'=>'comments',
		'created_at'=>'2019-02-11 14:52:14',
		'updated_at'=>'2019-02-11 14:52:14'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>41,
		'key'=>'delete_comments',
		'table_name'=>'comments',
		'created_at'=>'2019-02-11 14:52:14',
		'updated_at'=>'2019-02-11 14:52:14'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>42,
		'key'=>'browse_contacts',
		'table_name'=>'contacts',
		'created_at'=>'2019-02-11 14:53:06',
		'updated_at'=>'2019-02-11 14:53:06'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>43,
		'key'=>'read_contacts',
		'table_name'=>'contacts',
		'created_at'=>'2019-02-11 14:53:06',
		'updated_at'=>'2019-02-11 14:53:06'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>44,
		'key'=>'edit_contacts',
		'table_name'=>'contacts',
		'created_at'=>'2019-02-11 14:53:06',
		'updated_at'=>'2019-02-11 14:53:06'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>45,
		'key'=>'add_contacts',
		'table_name'=>'contacts',
		'created_at'=>'2019-02-11 14:53:06',
		'updated_at'=>'2019-02-11 14:53:06'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>46,
		'key'=>'delete_contacts',
		'table_name'=>'contacts',
		'created_at'=>'2019-02-11 14:53:06',
		'updated_at'=>'2019-02-11 14:53:06'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>47,
		'key'=>'browse_elements',
		'table_name'=>'elements',
		'created_at'=>'2019-02-11 14:57:08',
		'updated_at'=>'2019-02-11 14:57:08'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>48,
		'key'=>'read_elements',
		'table_name'=>'elements',
		'created_at'=>'2019-02-11 14:57:08',
		'updated_at'=>'2019-02-11 14:57:08'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>49,
		'key'=>'edit_elements',
		'table_name'=>'elements',
		'created_at'=>'2019-02-11 14:57:08',
		'updated_at'=>'2019-02-11 14:57:08'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>50,
		'key'=>'add_elements',
		'table_name'=>'elements',
		'created_at'=>'2019-02-11 14:57:08',
		'updated_at'=>'2019-02-11 14:57:08'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>51,
		'key'=>'delete_elements',
		'table_name'=>'elements',
		'created_at'=>'2019-02-11 14:57:08',
		'updated_at'=>'2019-02-11 14:57:08'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>52,
		'key'=>'browse_medias',
		'table_name'=>'medias',
		'created_at'=>'2019-02-11 14:57:58',
		'updated_at'=>'2019-02-11 14:57:58'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>53,
		'key'=>'read_medias',
		'table_name'=>'medias',
		'created_at'=>'2019-02-11 14:57:58',
		'updated_at'=>'2019-02-11 14:57:58'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>54,
		'key'=>'edit_medias',
		'table_name'=>'medias',
		'created_at'=>'2019-02-11 14:57:58',
		'updated_at'=>'2019-02-11 14:57:58'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>55,
		'key'=>'add_medias',
		'table_name'=>'medias',
		'created_at'=>'2019-02-11 14:57:58',
		'updated_at'=>'2019-02-11 14:57:58'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>56,
		'key'=>'delete_medias',
		'table_name'=>'medias',
		'created_at'=>'2019-02-11 14:57:58',
		'updated_at'=>'2019-02-11 14:57:58'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>57,
		'key'=>'browse_partners',
		'table_name'=>'partners',
		'created_at'=>'2019-02-11 15:01:08',
		'updated_at'=>'2019-02-11 15:01:08'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>58,
		'key'=>'read_partners',
		'table_name'=>'partners',
		'created_at'=>'2019-02-11 15:01:08',
		'updated_at'=>'2019-02-11 15:01:08'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>59,
		'key'=>'edit_partners',
		'table_name'=>'partners',
		'created_at'=>'2019-02-11 15:01:08',
		'updated_at'=>'2019-02-11 15:01:08'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>60,
		'key'=>'add_partners',
		'table_name'=>'partners',
		'created_at'=>'2019-02-11 15:01:08',
		'updated_at'=>'2019-02-11 15:01:08'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>61,
		'key'=>'delete_partners',
		'table_name'=>'partners',
		'created_at'=>'2019-02-11 15:01:08',
		'updated_at'=>'2019-02-11 15:01:08'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>62,
		'key'=>'browse_serials',
		'table_name'=>'serials',
		'created_at'=>'2019-02-11 15:03:26',
		'updated_at'=>'2019-02-11 15:03:26'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>63,
		'key'=>'read_serials',
		'table_name'=>'serials',
		'created_at'=>'2019-02-11 15:03:26',
		'updated_at'=>'2019-02-11 15:03:26'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>64,
		'key'=>'edit_serials',
		'table_name'=>'serials',
		'created_at'=>'2019-02-11 15:03:26',
		'updated_at'=>'2019-02-11 15:03:26'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>65,
		'key'=>'add_serials',
		'table_name'=>'serials',
		'created_at'=>'2019-02-11 15:03:26',
		'updated_at'=>'2019-02-11 15:03:26'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>66,
		'key'=>'delete_serials',
		'table_name'=>'serials',
		'created_at'=>'2019-02-11 15:03:26',
		'updated_at'=>'2019-02-11 15:03:26'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>67,
		'key'=>'browse_tags',
		'table_name'=>'tags',
		'created_at'=>'2019-02-11 15:04:01',
		'updated_at'=>'2019-02-11 15:04:01'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>68,
		'key'=>'read_tags',
		'table_name'=>'tags',
		'created_at'=>'2019-02-11 15:04:01',
		'updated_at'=>'2019-02-11 15:04:01'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>69,
		'key'=>'edit_tags',
		'table_name'=>'tags',
		'created_at'=>'2019-02-11 15:04:01',
		'updated_at'=>'2019-02-11 15:04:01'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>70,
		'key'=>'add_tags',
		'table_name'=>'tags',
		'created_at'=>'2019-02-11 15:04:01',
		'updated_at'=>'2019-02-11 15:04:01'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>71,
		'key'=>'delete_tags',
		'table_name'=>'tags',
		'created_at'=>'2019-02-11 15:04:01',
		'updated_at'=>'2019-02-11 15:04:01'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>72,
		'key'=>'browse_orders',
		'table_name'=>'orders',
		'created_at'=>'2019-02-16 13:38:07',
		'updated_at'=>'2019-02-16 13:38:07'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>73,
		'key'=>'read_orders',
		'table_name'=>'orders',
		'created_at'=>'2019-02-16 13:38:07',
		'updated_at'=>'2019-02-16 13:38:07'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>74,
		'key'=>'edit_orders',
		'table_name'=>'orders',
		'created_at'=>'2019-02-16 13:38:07',
		'updated_at'=>'2019-02-16 13:38:07'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>75,
		'key'=>'add_orders',
		'table_name'=>'orders',
		'created_at'=>'2019-02-16 13:38:07',
		'updated_at'=>'2019-02-16 13:38:07'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>76,
		'key'=>'delete_orders',
		'table_name'=>'orders',
		'created_at'=>'2019-02-16 13:38:07',
		'updated_at'=>'2019-02-16 13:38:07'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>77,
		'key'=>'browse_consolidations',
		'table_name'=>'consolidations',
		'created_at'=>'2019-02-23 06:15:34',
		'updated_at'=>'2019-02-23 06:15:34'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>78,
		'key'=>'read_consolidations',
		'table_name'=>'consolidations',
		'created_at'=>'2019-02-23 06:15:34',
		'updated_at'=>'2019-02-23 06:15:34'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>79,
		'key'=>'edit_consolidations',
		'table_name'=>'consolidations',
		'created_at'=>'2019-02-23 06:15:34',
		'updated_at'=>'2019-02-23 06:15:34'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>80,
		'key'=>'add_consolidations',
		'table_name'=>'consolidations',
		'created_at'=>'2019-02-23 06:15:34',
		'updated_at'=>'2019-02-23 06:15:34'
		] );


					
		DB::table("permissions")->insert( [
		'id'=>81,
		'key'=>'delete_consolidations',
		'table_name'=>'consolidations',
		'created_at'=>'2019-02-23 06:15:34',
		'updated_at'=>'2019-02-23 06:15:34'
		] );


    }
}
