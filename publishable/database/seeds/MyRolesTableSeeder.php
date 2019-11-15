<?php

use Illuminate\Database\Seeder;

class MyRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => '管理員',
                'created_at' => '2019-02-11 22:24:41',
                'updated_at' => '2019-02-11 22:24:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => '普通用戶',
                'created_at' => '2019-02-11 22:24:41',
                'updated_at' => '2019-02-11 22:24:41',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'super',
                'display_name' => '最高管理者',
                'created_at' => '2019-02-11 23:07:28',
                'updated_at' => '2019-02-11 23:07:28',
            ),
        ));
        
        
    }
}