<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;


class MyMenuSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Menu::truncate();

        Menu::create([
            'id'         => 1,
            'name'       => 'admin',
            'created_at' => '2019-02-11 06:24:41',
            'updated_at' => '2019-02-11 06:24:41',
        ]);

        Menu::create([
            'id'         => 3,
            'name'       => 'frontend_footer',
            'created_at' => '2019-03-06 16:46:42',
            'updated_at' => '2019-03-06 16:46:51',
        ]);

        Menu::create([
            'id'         => 5,
            'name'       => 'frontend',
            'created_at' => '2019-03-31 04:29:25',
            'updated_at' => '2019-03-31 04:29:25',
        ]);
    }
}
