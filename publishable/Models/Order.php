<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Order_Item;
use App\Models\Item;

class Order extends Model
{
    use HasFactory;

    protected $fillable= ['owner_id','receiver','receiverTitle','receiverMobile','receiverEmail','receiverAddress','message','couponCode','subtotal','shipCost','status'];

    public $additional_attributes = ['orderDetail'];

    public function owner(){
        return $this->belongsTo('App\Models\User');
    }

    public function items(){
        //return Order_Item::where('order_id',$this->id)->get();
        return $this->belongsToMany('App\Models\Item', 'order_item')->withPivot('qty','option');
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

    //顯示商品明細
    public function getOrderDetailAttribute(){
        $str_detail = "";
        foreach ($this->items as $item) {
            if(strlen($str_detail) != 0){
                $str_detail = $str_detail . ',';
            }
            $str_detail = $str_detail . $item->title . 'x' . $item->pivot->qty;
        }
        return $str_detail;
    }
}
