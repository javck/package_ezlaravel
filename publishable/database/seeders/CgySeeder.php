<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cgy;

class CgySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cgy::truncate();
        Cgy::create([
            'id' => 1,
            'parent_id' => NULL,
            'title' => '最新消息',
            'pic' => NULL,
            'desc' => NULL,
            'enabled' => 1,
            'sort' => 0,
            'type' => NULL
        ]);
        Cgy::create([
            'id' => 2,
            'parent_id' => NULL,
            'title' => '作品',
            'pic' => NULL,
            'desc' => NULL,
            'enabled' => 1,
            'sort' => 0,
            'type' => NULL
        ]);
        Cgy::create([
            'id' => 3,
            'parent_id' => NULL,
            'title' => '教學',
            'pic' => NULL,
            'desc' => NULL,
            'enabled' => 1,
            'sort' => 0,
            'type' => NULL
        ]);
    }
}
