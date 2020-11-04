<?php

namespace Javck\Ezlaravel\Actions;

use TCG\Voyager\Actions\AbstractAction;
use App\Models\Order;
use Auth;

class PayAction extends AbstractAction
{
    public function getTitle()
    {
        return '要求付款';
    }

    public function getIcon()
    {
        return 'voyager-dollar';
    }

    public function getPolicy()
    {
        return 'browse';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('payment.request',['order_id' => $this->data->id]);
    }

    public function shouldActionDisplayOnDataType()
    {
        if($this->dataType->slug == 'orders'){
            $order = Order::findOrFail($this->data->id);
            if($order->status == 'created'){
                if( Auth::user()->role->name == 'admin' || Auth::user()->role->name == 'super' ){
                    return true;
                }
            }
        }
        return false;
    }
}
