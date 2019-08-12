<div class="container clearfix">
    @if(!Auth::user())
    <div class="col_half">
        <div class="card">
            <div class="card-body">
                註冊過了嗎? <a href="{{url('loginFrom?from=shop/createCheckout')}}">點此進行登入</a>
            </div>
        </div>
    </div>
    @endif
    @if (setting('admin.isUseCoupon') == true)
        <div class="col_half">
            <div class="card">
                <div class="card-body">
                    有優惠券? <a href="{{url('shop/showCart')}}">點此進行輸入</a>
                </div>
            </div>
        </div>
    @endif

    <div class="clear"></div>

    <form id="billing-form" name="billing-form" class="nobottommargin" action="{{url('shop/submitCheckout')}}" method="post">
    <div class="row clearfix">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @if(!Auth::user())
        <div class="col-lg-6">
            <h3>個人資料</h3>
            <p>如為新會員，請填寫以下資料，於建立訂單時將一併為您註冊帳號.</p>
            <div class="col_half">
                <label for="username">{{trans('label.username')}}:</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" class="sm-form-control" />
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_half col_last">
                <label for="name">{{trans('label.name')}}:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="sm-form-control" />
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="clear"></div>

                {{--<div class="col_full">--}}
                    {{--<label for="billing-form-companyname">Company Name:</label>--}}
                    {{--<input type="text" id="billing-form-companyname" name="billing-form-companyname" value="" class="sm-form-control" />--}}
                {{--</div>--}}

            <div class="col_full">
                <label for="address">{{trans('label.address')}}:</label>
                <input type="text" id="address" name="address" value="{{ old('address') }}" class="sm-form-control" />
                @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_half">
                <label for="email">{{trans('label.email')}}:</label>
                <input id="email" type="text" class="sm-form-control" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_half col_last">
                <label for="mobile">{{trans('label.mobile')}}</label>
                <input id="mobile" type="text" class="sm-form-control" name="mobile" value="{{ old('mobile') }}" required>
                @if ($errors->has('mobile'))
                    <span class="help-block">
                        <strong>{{ $errors->first('mobile') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_half">
                <label for="password">{{trans('label.password')}}</label>
                <input id="password" type="password" class="sm-form-control" name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_half col_last">
                <label for="password-confirm">{{trans('label.chkPassword')}}</label>
                <input id="password-confirm" type="password" class="sm-form-control" name="password_confirm" required>
            </div>
        </div>
        @endif
        <div class="col-lg-6">
            <h3 class="">寄送地址</h3>
            <p>如帳單地址與收件人地址不同，請於備註裡頭說明.</p>
            <input type="hidden" id="couponCode" name="couponCode" value="@isset($couponCode) {{$couponCode}} @endisset" />
            <input type="hidden" id="owner_id" name="owner_id" value="@if(Auth::user()) {{Auth::user()->id}} @endif" />
            <input type="hidden" id="items" name="items" value="{{$items}}" />
            <input type="hidden" id="subtotal" name="subtotal" value="{{$subtotal}}" />
            <input type="hidden" id="shipCost" name="shipCost" value="{{$shipCost}}" />
            <input type="hidden" id="status" name="status" value="created" />

            <div class="col_half">
                <label for="receiver"><small>*</small>{{trans('label.receiver')}}:</label>
                <input type="text" id="receiver" name="receiver" value="@if(Auth::user()) {{Auth::user()->name}} @else {{old('receiver')}} @endif" class="sm-form-control" />
                @if ($errors->has('receiver'))
                    <span class="help-block">
                        <strong>{{ $errors->first('receiver') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_half col_last">
                <label for="receiverTitle">{{trans('label.title')}}:</label>
                <input type="text" id="receiverTitle" name="receiverTitle" value="{{ old('receiverTitle') }}" class="sm-form-control" />
                @if ($errors->has('receiverTitle'))
                    <span class="help-block">
                        <strong>{{ $errors->first('receiverTitle') }}</strong>
                    </span>
                @endif
            </div>

            <div class="clear"></div>

            <div class="col_full">
                <label for="receiverEmail"><small>*</small>{{trans('label.receiverEmail')}}:</label>
                <input type="email" id="receiverEmail" name="receiverEmail" value="@if(Auth::user()) {{Auth::user()->email}} @else {{old('receiverEmail')}} @endif" class="sm-form-control" />
                @if ($errors->has('receiverEmail'))
                    <span class="help-block">
                        <strong>{{ $errors->first('receiverEmail') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_full">
                <label for="receiverAddress"><small>*</small>{{trans('label.receiverAddress')}}:</label>
                <input type="text" id="receiverAddress" name="receiverAddress" value="@if(Auth::user()) {{Auth::user()->address}} @else {{old('receiverAddress')}} @endif" class="sm-form-control" />
                @if ($errors->has('receiverAddress'))
                    <span class="help-block">
                        <strong>{{ $errors->first('receiverAddress') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_full">
                <label for="receiverMobile"><small>*</small>{{trans('label.receiverMobile')}}:</label>
                <input type="text" id="receiverMobile" name="receiverMobile" value="@if(Auth::user()) {{Auth::user()->mobile}} @else {{old('receiverMobile')}} @endif" class="sm-form-control" />
                @if ($errors->has('receiverMobile'))
                    <span class="help-block">
                        <strong>{{ $errors->first('receiverMobile') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_full">
                <label for="message">{{trans('label.message')}}</label>
                <textarea class="sm-form-control" id="message" name="message" rows="6" cols="30">{{old('message')}}</textarea>
                @if ($errors->has('message'))
                    <span class="help-block">
                        <strong>{{ $errors->first('message') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    </form>

    <div class="clear"></div>

    <div class="w-100 bottommargin"></div>
    <div class="row clearfix">
        <div class="col-lg-6">
            <div class="table-responsive clearfix">
                <h4>您的訂單</h4>
                <table class="table cart">
                    <thead>
                    <tr>
                        <th class="cart-product-thumbnail">&nbsp;</th>
                        <th class="cart-product-name">{{trans('page.product')}}</th>
                        <th class="cart-product-quantity">{{trans('page.qty')}}</th>
                        <th class="cart-product-subtotal">{{trans('page.total')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(Cart::getContent() as $cartItem)
                        <tr class="cart_item">
                            <td class="cart-product-thumbnail">
                                @php
                                    $item = \App\Item::findOrFail($cartItem->id);
                                @endphp
                                <a href="#"><img width="64" height="64" src="{{Voyager::image($item->getFirstPic())}}" alt="{{ $cartItem->name }}"></a>
                            </td>

                            <td class="cart-product-name">
                                <a href="#">{{ $cartItem->name }}</a>
                            </td>

                            <td class="cart-product-quantity">
                                <div class="quantity clearfix">
                                    {{$cartItem->quantity}}
                                </div>
                            </td>

                            <td class="cart-product-subtotal">
                                <span class="amount">${{$cartItem->getPriceSum()}}</span>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="table-responsive">
                <h4>訂單金額</h4>
                <table class="table cart">
                    <tbody>
                    <tr class="cart_item">
                        <td class="notopborder cart-product-name">
                            <strong>{{trans('page.cartSubTotal')}}</strong>
                        </td>

                        <td class="notopborder cart-product-name">
                            <span class="amount">${{Cart::getSubTotal()}}</span>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <strong>{{trans('page.shippingCost')}}</strong>
                        </td>

                        <td class="cart-product-name">
                            <span class="amount">{{trans('page.freeShipping')}}</span>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <strong>{{trans('page.withShipTotal')}}</strong>
                        </td>

                        <td class="cart-product-name">
                            <span class="amount color lead"><strong>${{Cart::getTotal()}}</strong></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="accordion clearfix">
                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>{{ __('page.pay_atm') }}</div>
                <div class="acc_content clearfix">{{ setting('site.pay_atm_info') }}</div>

                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>{{ __('page.pay_third') }}</div>
                <div class="acc_content clearfix">{{ setting('site.pay_third_info') }}</div>

                {{-- <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Paypal付款</div>
                <div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div> --}}
            </div>
            <a id="btn_submitOrder" href="#" class="button button-3d fright">{{trans('page.submitOrder')}}</a>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script>
    $(document).ready(function(){
        var url = document.URL;
        if (url.slice(-1) == '#'){
            url = url.substr(0,url.length-1);
        }
        $('#btn_submitOrder').click(function(e){
            e.preventDefault();
            $('#billing-form').submit();
        });



    });

</script>