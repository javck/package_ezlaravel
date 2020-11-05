<!-- include前，外部請先包以下程式碼
<div id="top-cart"> ... </div>
-->
<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>{{Cart::getTotalQuantity()}}</span></a>
<div class="top-cart-content">
    <div class="top-cart-title">
        <h4>{{trans('page.shopCart')}}</h4>
    </div>
    <div class="top-cart-items">
        @forelse(Cart::getContent() as $cartItem)
            <div class="top-cart-item clearfix">
                <div class="top-cart-item-image">
                    @php
                        $item = \App\Item::findOrFail($cartItem->id);
                    @endphp
                    <a href="#"><img src="{{Voyager::image($item->getFirstPic())}}" alt="{{$cartItem->name}}" /></a>
                </div>
                <div class="top-cart-item-desc">
                    <a href="#">{{$cartItem->name}}</a>
                    <span class="top-cart-item-price">${{$cartItem->price}}</span>
                    <span class="top-cart-item-quantity">x {{$cartItem->quantity}}</span>
                </div>
            </div>
        @empty
            {{trans('page.empty')}}
        @endforelse
    </div>
    <div class="top-cart-action clearfix">
        <span class="fleft top-checkout-price">${{Cart::getTotal()}}</span>
        @if(Cart::getTotalQuantity()!=0)
            <button class="button button-3d button-small nomargin fright" onclick="location.href='{{url("shop/showCart")}}'">{{trans('page.seeShopCart')}}</button>
        @endif
        
    </div>
</div>