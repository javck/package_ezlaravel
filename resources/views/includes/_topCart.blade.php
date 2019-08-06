<!-- include前，外部請先包以下程式碼
<div id="top-cart"> ... </div>
-->
<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>{{Cart::count()}}</span></a>
<div class="top-cart-content">
    <div class="top-cart-title">
        <h4>{{trans('page.shopCart')}}</h4>
    </div>
    <div class="top-cart-items">
        @forelse(Cart::content() as $cartItem)
            <div class="top-cart-item clearfix">
                <div class="top-cart-item-image">
                    <a href="#"><img src="{{Voyager::image($cartItem->model->getFirstPic())}}" alt="{{$cartItem->model->title}}" /></a>
                </div>
                <div class="top-cart-item-desc">
                    <a href="#">{{$cartItem->model->title}}</a>
                    <span class="top-cart-item-price">${{$cartItem->model->price_new or $cartItem->model->price_og}}</span>
                    <span class="top-cart-item-quantity">x {{$cartItem->qty}}</span>
                </div>
            </div>
        @empty
            {{trans('page.empty')}}
        @endforelse
    </div>
    <div class="top-cart-action clearfix">
        <span class="fleft top-checkout-price">${{Cart::subtotal()}}</span>
        @if(count(Cart::content())!=0)
            <button class="button button-3d button-small nomargin" id="clear-cart" onclick="clearCart()">清空</button>
            <button class="button button-3d button-small nomargin fright" onclick="location.href='{{url("shop/showCart")}}'">{{trans('page.seeShopCart')}}</button>
        @endif
        
    </div>
</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script>
    function clearCart(){
        var url = document.URL;
        if (url.slice(-1) == '#'){
            url = url.substr(0,url.length-1);
        }
        event.preventDefault();
        var item_id = $(this).attr('href');
        //console.log(url + 'api/shop/clearCart');
        $.ajax({
            type: "get",
            url: url + 'api/shop/clearCart',
            success: function (data) {
                console.log(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }

</script>