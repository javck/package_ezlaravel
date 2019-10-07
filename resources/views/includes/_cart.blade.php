<div class="container clearfix">

    @if(Cart::getTotalQuantity() > 0)
    <div class="table-responsive bottommargin">


        <table class="table cart">
            <thead>
            <tr>
                <th class="cart-product-remove">&nbsp;</th>
                <th class="cart-product-thumbnail">&nbsp;</th>
                <th class="cart-product-name">@lang('page.product')</th>
                <th class="cart-product-price">@lang('page.price')</th>
                <th class="cart-product-quantity">@lang('page.qty')</th>
                <th class="cart-product-subtotal">@lang('page.total')</th>
            </tr>
            </thead>
            <tbody>
            @foreach(Cart::getContent() as $cartItem)
                <tr class="cart_item">
                    <td class="cart-product-remove">
                        <a href="{{$cartItem->id}}" class="removeCart" title="@lang('page.removeItem')}}"><i class="icon-trash2"></i></a>
                    </td>

                    <td class="cart-product-thumbnail">
                        @php
                            $item = \App\Item::findOrFail($cartItem->id);
                        @endphp
                        <a href="#"><img width="64" height="64" src="{{Voyager::image($item->getFirstPic())}}" alt="{{$cartItem->name}}"></a>
                    </td>

                    <td class="cart-product-name">
                        <a href="#">{{$cartItem->name}}</a>
                    </td>

                    <td class="cart-product-price">
                        <span class="amount">${{$cartItem->price}}</span>
                    </td>

                    <td class="cart-product-quantity">
                        <div class="quantity clearfix">
                            <input type="hidden" value="{{$item->id}}" class="id"/>
                            <input type="hidden" value="{{$item->stock}}" class="stock"/>
                            <input type="button" value="-" class="minus">
                            <input type="text" name="qty" value="{{$cartItem->quantity}}" class="qty" />
                            <input type="button" value="+" class="plus">
                        </div>
                    </td>

                    <td class="cart-product-subtotal">
                        <span class="amount">{{ Cart::get($cartItem->id)->getPriceSum() }}</span>
                    </td>
                </tr>
            @endforeach

            <tr class="cart_item">
                <td colspan="6">
                    <div class="row clearfix">
                        <div class="col-md-4 col-xs-4 nopadding">
                            @if(setting('admin.isUseCoupon') == 'true')
                                <div class="col-md-8 col-xs-7 nopadding">
                                    <input type="text" value="" class="sm-form-control" placeholder="@lang('page.couponCode')" />
                                </div>
                                <div class="col-md-4 col-xs-5">
                                    <a href="#" class="button button-3d button-black nomargin">@lang('page.useCoupon')</a>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-8 col-xs-8 nopadding">

                            <a href="#" id="update-cart" class="button button-3d nomargin fright">@lang('page.updateCart')</a>
                            <a href="{{url('shop/createCheckout')}}" class="button button-3d notopmargin fright info">@lang('page.checkout')</a>
                            <a href="#" id="clear-cart" class="button button-3d nomargin fright">@lang('page.clearCart')</a>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>

        </table>

    </div>

    <div class="row clearfix">
        <div class="col-md-6 clearfix">
            <h4>@lang('page.calShip')</h4>
            <form>
                <div class="col_full">
                    {{-- <select class="sm-form-control">
                        <option value="TW">&#197;台灣</option>
                    </select>
                </div>
                <div class="col_half">
                    <input type="text" class="sm-form-control" placeholder="State / Country" />
                </div>

                <div class="col_half col_last">
                    <input type="text" class="sm-form-control" placeholder="PostCode / Zip" />
                </div>
                <a href="#" class="button button-3d nomargin button-black">@lang('page.updateTotal')</a>
            </form> --}}
        </div>

        <div class="col-md-6 clearfix">
            <div class="table-responsive">
                <h4>@lang('page.cartTotal')</h4>

                <table class="table cart">
                    <tbody>
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <strong>@lang('page.cartSubTotal')</strong>
                        </td>

                        <td class="cart-product-name">
                            <span class="amount">${{Cart::getSubTotal()}}</span>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <strong>@lang('page.shippingCost')</strong>
                        </td>

                        <td class="cart-product-name">
                            <span class="amount">@lang('page.freeShipping')</span>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <strong>@lang('page.withShipTotal')</strong>
                        </td>

                        <td class="cart-product-name">
                            <span class="amount color lead"><strong>${{Cart::getTotal()}}</strong></span>
                        </td>
                    </tr>
                    </tbody>

                </table>

            </div>
        </div>
    </div>

    @else
        {{ __('page.cart_empty') }}
    @endif

</div>


<script>
    $(document).ready(function(){
        var url = "{{url('/')}}";
        if (url.slice(-1) == '#'){
            url = url.substr(0,url.length-1);
        }
        $('.minus').click(function(e){
            // console.log('minus');
            // console.log($(this).next());
            var qty = parseInt($(this).next().val());
            if (qty>1) {
                qty = qty - 1;
                $(this).next().val(qty);
            }
        });

        $('.plus').click(function(e){
            console.log('plus');
            var stock = $(this).siblings(".stock").eq(0).val();
            var qty = parseInt($(this).prev().val());
            if (qty < stock){
                qty = qty + 1;
            }
            $(this).prev().val(qty);
        });

        $('#update-cart').click(function(e){
            var items = $('div.quantity');
            //console.log(items);
            var newCart = '';
            items.each(function (index,element) {
                console.log($(this));
                newCart += $(this).children().eq(0).val() + '=' + $(this).children().eq(3).val();
                if (index != items.length-1) {
                    newCart +=';';
                }

            });
            //console.log(newCart);
            console.log('url:' + url + '/api/shop/updateCart?cart=' + newCart);
            $.ajax({

                type: "get",
                url: url + '/api/shop/updateCart?cart=' + newCart,
                success: function (data) {
                    console.log(data);
                    location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        $('#clear-cart').click(function(e){
            //console.log(newCart);
            e.preventDefault();
            console.log('url:' + url + '/api/shop/clearCart');
            $.ajax({

                type: "get",
                url: url + '/api/shop/clearCart',
                success: function (data) {
                    console.log(data);
                    location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        $('.removeCart').click(function(e){
            console.log('removeCart');
            e.preventDefault();
            $.ajax({

                type: "get",
                url: url + '/api/shop/removeCart?rowId=' + $(this).attr('href'),
                success: function (data) {
                    console.log(data);
                    location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

    });
</script>