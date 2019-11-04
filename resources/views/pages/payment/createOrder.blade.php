@extends('layouts.site')
@section('seo')
    @parent
    @isset($keywords)
        <meta name="keywords" content="{{ $keywords }}">
    @endisset
    @isset($description)
        <meta name="description" content="{{ $description }}">
    @endisset
@stop
@section('page_title')提交訂單@stop

@section('page_top')
@stop

@section('pri_nav')
    {{ menu('frontend', 'menu.classic') }}
@stop

@section('body')
<div class="container clearfix">
    {{--     
    @if(!Auth::user())
    <div class="col_half">

            <div class="panel panel-default">
                <div class="panel-body">
                    註冊過了嗎? <a href="{{url('loginFrom?from=shop/createCheckout')}}">點此進行登入</a>
                </div>
            </div>

    </div>
    @endif 
    <div class="col_half col_last">
        <div class="panel panel-default">
            <div class="panel-body">
                有優惠券? <a href="{{url('shop/showCart')}}">點此進行輸入</a> 
            </div>
        </div>
    </div>
    --}}
    <div class="row clearfix">
        <form id="billing-form" name="billing-form" class="nobottommargin" action="{{url('payment/submitCheckout')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="name" value="{{ $name }}">
            <input type="hidden" name="quantity" value="{{ $quantity }}">
            <input type="hidden" name="amount" value="{{ $amount }}">
            <input type="hidden" name="desc" value="{{ $desc }}">
            <input type="hidden" name="order_id" value="{{ $order->id }}">
            <input type="hidden" name="url" value="{{ $url }}">
            <input type="hidden" name="payment" value="{{ $payment }}">
            <input type="hidden" name="user_id" value="{{ $user_id }}">
        </form>
        <div class="clear bottommargin"></div>
        <div class="col-md-6">
            <div class="table-responsive clearfix">
                <h4>您的訂單</h4>

                <table class="table cart">
                    @if($order->getOriginal('type') == 'consolidation')
                    <thead>
                    <tr>
                        <th class="cart-product-thumbnail">&nbsp;</th>
                        <th class="cart-product-name">{{trans('page.product')}}</th>
                        <th class="cart-product-quantity">{{trans('page.qty')}}</th>
                        <th class="cart-product-subtotal">{{trans('page.total')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $consolidation)
                            <tr class="cart_item">
                                <td class="cart-product-thumbnail">
                                    <a href="#"><img width="64" height="64" src="{{$consolidation->getPicPath()}}" alt="{{$consolidation->name}}"></a>
                                </td>

                                <td class="cart-product-name">
                                    {{$consolidation->name}}
                                </td>

                                <td class="cart-product-quantity">
                                    <div class="quantity clearfix">
                                        {{$consolidation->qty}}
                                    </div>
                                </td>

                                <td class="cart-product-subtotal">
                                    <span class="amount">${{$consolidation->subtotal}}</span>
                                </td>
                            </tr>
                        @endforeach
                    @elseif($order->getOriginal('type') == 'item')
                    <thead>
                    <tr>
                        <th class="cart-product-thumbnail">&nbsp;</th>
                        <th class="cart-product-name">{{trans('page.product')}}</th>
                        <th class="cart-product-quantity">{{trans('page.qty')}}</th>
                        <th class="cart-product-subtotal">{{trans('page.total')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach(Cart::content() as $cartItem)
                            <tr class="cart_item">
                                <td class="cart-product-thumbnail">
                                    <a href="#"><img width="64" height="64" src="{{asset('images/'.$cartItem->model->getFirstPic())}}" alt="{{$cartItem->model->title}}"></a>
                                </td>

                                <td class="cart-product-name">
                                    <a href="#">{{$cartItem->model->title}}</a>
                                </td>

                                <td class="cart-product-quantity">
                                    <div class="quantity clearfix">
                                        {{$cartItem->qty}}
                                    </div>
                                </td>

                                <td class="cart-product-subtotal">
                                    <span class="amount">${{$cartItem->subtotal()}}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    @endif
                </table>

            </div>
        </div>
        <div class="col-md-6 col-last">
            <div class="table-responsive">
                <h4>訂單金額</h4>

                <table class="table cart">
                    <tbody>
                    <tr class="cart_item">
                        <td class="notopborder cart-product-name">
                            <strong>{{trans('page.cartSubTotal')}}</strong>
                        </td>

                        <td class="notopborder cart-product-name">
                            <span class="amount">${{$order->subtotal}}</span>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <strong>{{trans('page.shippingCost')}}</strong>
                        </td>

                        <td class="cart-product-name">
                            <span class="amount">${{ $order->shipCost }}</span>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <strong>{{trans('page.withShipTotal')}}</strong>
                        </td>

                        <td class="cart-product-name">
                            <span class="amount color lead"><strong>${{$amount}}</strong></span>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="accordion clearfix">
                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>綠界金流</div>
                <div class="acc_content clearfix">透過第三方金流：綠界金流來進行支付，支援信用卡/網路ATM/ATM櫃員機/超商條碼</div>

                {{-- <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>線上刷卡</div>
                <div class="acc_content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Paypal付款</div>
                <div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div> --}}
            </div>
            <a id="btn_submitOrder" href="#" class="button button-3d fright">{{trans('page.submitOrder')}}</a>
        </div>
    </div>
</div>
@stop

@section('js')
    
    <script type="text/javascript">
        var button = document.querySelector('#btn_submitOrder');
        button.addEventListener("click",function() {
          document.querySelector("#billing-form").submit();
        });
    </script>

@stop
