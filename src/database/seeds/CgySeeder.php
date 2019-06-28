<?php

use Illuminate\Database\Seeder;
use App\Cgy;

class CgySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Cgy::truncate();
        Cgy::create(['id' => 1 , 'title' => '服飾','pic' => 'category/10.jpg' , 'enabled' => true , 'sort' => 0 ]);
        Cgy::create(['id' => 2 , 'parent_id' => 1 ,'title' => '洋裝','pic' => 'category/21.jpg' , 'enabled' => true , 'sort' => 0 ]);
        Cgy::create(['id' => 3 , 'parent_id' => 1 ,'title' => '褲子','pic' => 'category/17.jpg' , 'enabled' => true , 'sort' => 1 ]);
        Cgy::create(['id' => 4 , 'parent_id' => 1 ,'title' => '鞋子','pic' => 'category/15.jpg' , 'enabled' => true , 'sort' => 2 ]);
        Cgy::create(['id' => 5 , 'parent_id' => 1 ,'title' => '眼鏡','pic' => 'category/6.jpg' , 'enabled' => true , 'sort' => 3 ]);
        Cgy::create(['id' => 6 , 'parent_id' => 1 ,'title' => 'T-Shirt','pic' => 'category/19.jpg' , 'enabled' => true , 'sort' => 4 ]);
        Cgy::create(['id' => 7 , 'parent_id' => 1 ,'title' => '手錶','pic' => 'category/23.jpg' , 'enabled' => true , 'sort' => 5 ]);
        factory(App\Cgy::class, 20)->create();
    }
}
