<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("menus")->truncate();

        DB::table("menus")->insert( [
		'id'=>1,
		'name'=>'admin',
		'created_at'=>'2019-02-11 14:24:41',
		'updated_at'=>'2019-02-11 14:24:41'
		] );


					
		DB::table("menus")->insert( [
		'id'=>2,
		'name'=>'frontend',
		'created_at'=>'2019-03-07 00:01:56',
		'updated_at'=>'2019-03-07 00:01:56'
		] );


					
		DB::table("menus")->insert( [
		'id'=>3,
		'name'=>'frontend_footer',
		'created_at'=>'2019-03-07 00:46:42',
		'updated_at'=>'2019-03-07 00:46:51'
		] );
    }
}
