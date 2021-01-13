<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order_Item extends Model
{
    use HasFactory;

    protected $fillable= ['order_id','item_id','qty','option'];
    public $timestamps = false;
    protected $table = 'order_item';
}
