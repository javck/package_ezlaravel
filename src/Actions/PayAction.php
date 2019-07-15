<?php

namespace Javck\Easyweb2\Actions;

use TCG\Voyager\Actions\AbstractAction;

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
        return $this->dataType->slug == 'orders';
    }
}