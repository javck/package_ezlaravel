<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Tag;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::truncate();
//        factory(Item::class, 10)->create();
        $item1 = Item::create(['title' => '灰色洋裝','price_og' => 750 , 'price_new' => 360 , 'star' => 9 , 'enabled' => true , 'sort' => 0 , 'desc' => '超時尚的一件灰色洋裝' , 'stock' => 3 , 'sku' => 'A3287475' , 'cgy_id' =>2 , 'chars' =>'多樣顏色可供挑選;尺寸齊全;30天退款保證', 'badge' => '5折起' , 'pics' => 'dress/1.jpg,dress/1-1.jpg']);
        $item1->tags()->sync(1);
        $item2 = Item::create(['title' => '卡其褲','price_og' => 1200 , 'star' => 7 , 'enabled' => true , 'sort' => 1 , 'desc' => '超Men卡其褲' , 'stock' => 6 , 'sku' => 'AF4487375' , 'cgy_id' =>3 , 'chars' =>'多樣顏色可供挑選;尺寸齊全;30天退款保證', 'pics' => 'pants/1.jpg,pants/1-1.jpg']);
        $item2->tags()->sync(1);
        $item3 = Item::create(['title' => '炫亮皮鞋','price_og' => 1500 , 'star' => 6 , 'enabled' => true , 'sort' => 2 , 'desc' => '你不能沒有的一雙鞋子' , 'stock' => 6 , 'sku' => 'AWW4111375' , 'cgy_id' =>4 , 'chars' =>'多樣顏色可供挑選;尺寸齊全;30天退款保證', 'badge' => '最後一雙' , 'pics' => 'shoes/1.jpg,shoes/1-1.jpg,shoes/1-2.jpg']);
        $item3->tags()->sync(1);
        $item4 = Item::create(['title' => '藍色套裝','price_og' => 600 , 'star' => 8 , 'enabled' => true , 'sort' => 3 , 'desc' => '性感又火辣，你必須擁有' , 'stock' => 9 , 'sku' => 'AA3375' , 'cgy_id' =>2 , 'chars' =>'多樣顏色可供挑選;尺寸齊全;30天退款保證', 'pics' => 'dress/2.jpg,dress/2-2.jpg']);
        $item4->tags()->sync(1);
        $item5 = Item::create(['title' => '灰色太陽眼鏡','price_og' => 600 , 'price_new' => 360 , 'star' => 6 , 'enabled' => true , 'sort' => 0 , 'desc' => '超優質眼鏡' , 'stock' => 8 , 'sku' => 'AOM32875' , 'cgy_id' =>5 , 'chars' =>'30天退款保證', 'badge' => '有現貨' , 'pics' => 'sunglasses/1.jpg,sunglasses/1-1.jpg']);
        $item5->tags()->sync(2);
        $item6 = Item::create(['title' => '國旗T-shirt','price_og' => 300 , 'star' => 7 , 'enabled' => true , 'sort' => 1 , 'desc' => '好看的T-Shirt' , 'stock' => 1 , 'sku' => 'AOJ3M32875' , 'cgy_id' =>6 , 'chars' =>'尺寸齊全;30天退款保證', 'badge' => '有現貨' , 'pics' => 'tshirts/1.jpg,tshirts/1-1.jpg']);
        $item6->tags()->sync(2);
        $item7 = Item::create(['title' => '機械手錶','price_og' => 3900 , 'star' => 9 , 'enabled' => true , 'sort' => 2 , 'desc' => '好看的T-Shirt' , 'stock' => 1 , 'sku' => 'AU32132875' , 'cgy_id' =>7 , 'chars' =>'30天退款保證' , 'pics' => 'watches/1.jpg,watches/1-1.jpg']);
        $item7->tags()->sync(2);
        $item8 = Item::create(['title' => '帆布鞋','price_og' => 1000 , 'price_new' => 700 , 'star' => 10 , 'enabled' => true , 'sort' => 3 , 'desc' => '耐用又好穿' , 'stock' => 8 , 'sku' => 'AIO32875' , 'cgy_id' =>4 , 'chars' =>'多樣顏色可供挑選;尺寸齊全;30天退款保證' , 'pics' => 'shoes/2.jpg,shoes/2-1.jpg']);
        $item8->tags()->sync(2);
        $item9 = Item::create(['title' => '粉色洋裝','price_og' => 1200 , 'star' => 5, 'enabled' => true , 'sort' => 0 , 'desc' => '超時尚洋裝' , 'stock' => 18 , 'sku' => 'AMMIO875' , 'cgy_id' =>2 , 'chars' =>'尺寸齊全;30天退款保證' , 'pics' => 'dress/3.jpg,dress/3-1.jpg,dress/3-2.jpg']);
        $item9->tags()->sync(3);
        $item10 = Item::create(['title' => '黑色卡其褲','price_og' => 760  , 'price_new' => 660 , 'star' => 5, 'enabled' => true , 'sort' => 1 , 'desc' => '防水又舒服' , 'stock' => 99 , 'sku' => 'AK47MMIO875' , 'cgy_id' =>3 , 'chars' =>'尺寸齊全;30天退款保證' , 'pics' => 'pants/5.jpg,pants/5-1.jpg']);
        $item10->tags()->sync(3);
        $item11 = Item::create(['title' => '棕色太陽眼鏡','price_og' => 420 , 'star' => 7 , 'enabled' => true , 'sort' => 2 , 'desc' => '超優質眼鏡' , 'stock' => 2 , 'sku' => 'AU3M32875' , 'cgy_id' =>5 , 'chars' =>'30天退款保證', 'badge' => '有現貨' , 'pics' => 'sunglasses/2.jpg,sunglasses/2-1.jpg']);
        $item11->tags()->sync(3);
        $item12 = Item::create(['title' => '黑色Polo衫','price_og' => 360 , 'star' => 10 , 'enabled' => true , 'sort' => 3 , 'desc' => '好看的Polo衫' , 'stock' => 10 , 'sku' => 'AO1IM32875' , 'cgy_id' =>6 , 'chars' =>'尺寸齊全;30天退款保證', 'badge' => '有現貨' , 'pics' => 'tshirts/4.jpg,tshirts/4-1.jpg']);
        $item12->tags()->sync(3);

    }
}
