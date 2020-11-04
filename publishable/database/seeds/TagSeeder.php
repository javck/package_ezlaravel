<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        Tag::create(['id' => 1 , 'title' => '新到貨','enabled' => true , 'type' => 'shop' , 'sort' => 0]);
        Tag::create(['id' => 2 , 'title' => '熱賣商品','enabled' => true , 'type' => 'shop' , 'sort' => 0]);
        Tag::create(['id' => 3 , 'title' => '推薦商品','enabled' => true , 'type' => 'shop' , 'sort' => 0]);
        Tag::create(['id' => 4 , 'title' => '程式啟蒙', 'link' => 'class/codeStarter' , 'type' => 'works,video','enabled' => true  , 'sort' => 0]);
        Tag::create(['id' => 5 , 'title' => 'Laravel程式', 'link' => 'https://laravel.com/' , 'type' => 'works','enabled' => true  , 'sort' => 0]);
        Tag::create(['id' => 6 , 'title' => '報名相關', 'type' => 'qna','enabled' => true  , 'sort' => 0]);
        Tag::create(['id' => 7 , 'title' => '教學', 'type' => 'qna','enabled' => true  , 'sort' => 1]);
        Tag::create(['id' => 8 , 'title' => '費用', 'type' => 'qna','enabled' => true  , 'sort' => 2]);
    }
}
