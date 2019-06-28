<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order_Item;
use App\Item;

class Order extends Model
{
    protected $fillable= ['owner_id','receiver','receiverTitle','receiverMobile','receiverEmail','receiverAddress','message','couponCode','subtotal','shipCost','status'];

    public function owner(){
        return $this->belongsTo('App\User');
    }

    public function items(){
        //return Order_Item::where('order_id',$this->id)->get();
        return $this->belongsToMany('App\Item', 'order_item')->withPivot('qty','option');
    }

    public function getTotalAttribute(){
        $order_items = Order_Item::where('order_id',$this->id)->get();
        $total = 0;
        foreach ($order_items as $order_item){
            $item = Item::findOrFail($order_item->item_id);
            $total += $item->price * $order_item->qty;
        }
        return $total;
    }

    public function getStatusName(){
        return json_decode(setting('constant.order_statuses'),true)[$this->status];
    }
}
