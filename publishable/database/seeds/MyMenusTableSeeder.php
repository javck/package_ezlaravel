<?php

use Illuminate\Database\Seeder;

class MyMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'frontend_footer',
                'created_at' => '2019-03-07 00:46:42',
                'updated_at' => '2019-03-07 00:46:51',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'frontend',
                'created_at' => '2019-03-31 12:29:25',
                'updated_at' => '2019-03-31 12:29:25',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'frontend_demo_left',
                'created_at' => '2019-04-04 22:01:05',
                'updated_at' => '2019-04-04 22:16:34',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'frontend_demo_right',
                'created_at' => '2019-04-04 22:16:49',
                'updated_at' => '2019-04-04 22:16:49',
            ),
        ));
        
        
    }
}