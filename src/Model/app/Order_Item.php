<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    protected $fillable= ['order_id','item_id','qty','option'];
    public $timestamps = false;
    protected $table = 'order_item';
}
