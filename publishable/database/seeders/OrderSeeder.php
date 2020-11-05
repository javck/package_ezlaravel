<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Order_Item;
use App\Models\Item;
use App\Models\User;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::Create();
        Order::truncate();
        Order_Item::truncate();

        $user = User::findOrFail(3);
        for ($i=0 ; $i<50 ; $i++){
            $item_ids = [1,2,3,4,5,6,7,8,9,10,11,12];
            $itemQty = $faker->numberBetween($min = 1, $max = 4);
            $subtotal = 0;
            $order = Order::create(['owner_id' => $user->id , 'receiver' => $user->name , 'receiverEmail' => $user->email , 'receiverMobile' => $user->mobile , 'receiverAddress' => $user->address , 'message' => $faker->text(100) , 'subtotal' => 0 , 'shipCost' => 0 ,  'status' => $faker->randomElement(array ('create','finish','prepare','cancel'))]);
            for ($j=0 ; $j<$itemQty ; $j++){
                $index = $faker->numberBetween(0,count($item_ids)-1);
                $item_id = $item_ids[$index];
                $qty = $faker->numberBetween(1,10);
                $item = Item::findOrFail($item_id);
                //Order_Item::create(['order_id' => $order->id , 'item_id' => $item_id , 'qty' => $qty]);
                $order->items()->attach($item->id,['qty' => $qty]);
                $subtotal += $item->price * $qty;
                unset($item_ids[$index]);
                $item_ids = array_values($item_ids);
            }
            $order->subtotal = $subtotal;
            $order->update();
        }
    }
}
