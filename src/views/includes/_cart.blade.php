<div class="container clearfix">

    @if(Cart::count() > 0)
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
            @foreach(Cart::content() as $cartItem)
                <tr class="cart_item">
                    <td class="cart-product-remove">
                        <a href="{{$cartItem->rowId}}" class="removeCart" title="@lang('page.removeItem')}}"><i class="icon-trash2"></i></a>
                    </td>

                    <td class="cart-product-thumbnail">
                        <a href="#"><img width="64" height="64" src="{{asset('images/'.$cartItem->model->getFirstPic())}}" alt="{{$cartItem->model->title}}"></a>
                    </td>

                    <td class="cart-product-name">
                        <a href="#">{{$cartItem->model->title}}</a>
                    </td>

                    <td class="cart-product-price">
                        <span class="amount">${{$cartItem->price}}</span>
                    </td>

                    <td class="cart-product-quantity">
                        <div class="quantity clearfix">
                            <input type="hidden" value="{{$cartItem->rowId}}" class="id"/>
                            <input type="hidden" value="{{$cartItem->model->stock}}" class="stock"/>
                            <input type="button" value="-" class="minus">
                            <input type="text" name="qty" value="{{$cartItem->qty}}" class="qty" />
                            <input type="button" value="+" class="plus">
                        </div>
                    </td>

                    <td class="cart-product-subtotal">
                        <span class="amount">${{ $cartItem->subtotal }}</span>
                    </td>
                </tr>
            @endforeach

            <tr class="cart_item">
                <td colspan="6">
                    <div class="row clearfix">
                        <div class="col-md-4 col-xs-4 nopadding">
                            <div class="col-md-8 col-xs-7 nopadding">
                                <input type="text" value="" class="sm-form-control" placeholder="@lang('page.couponCode')" />
                            </div>
                            <div class="col-md-4 col-xs-5">
                                <a href="#" class="button button-3d button-black nomargin">@lang('page.useCoupon')</a>
                            </div>
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
                    <select class="sm-form-control">
                        <option value="AX">&#197;land Islands</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="PW">Belau</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="VG">British Virgin Islands</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo (Brazzaville)</option>
                        <option value="CD">Congo (Kinshasa)</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Cura&Ccedil;ao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and McDonald Islands</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran</option>
                        <option value="IQ">Iraq</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="CI">Ivory Coast</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao S.A.R., China</option>
                        <option value="MK">Macedonia</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="KP">North Korea</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PS">Palestinian Territory</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="QA">Qatar</option>
                        <option value="IE">Republic of Ireland</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
                        <option value="BL">Saint Barth&eacute;lemy</option>
                        <option value="SH">Saint Helena</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="SX">Saint Martin (Dutch part)</option>
                        <option value="MF">Saint Martin (French part)</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="SM">San Marino</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia/Sandwich Islands</option>
                        <option value="KR">South Korea</option>
                        <option value="SS">South Sudan</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syria</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB" selected='selected'>United Kingdom (UK)</option>
                        <option value="US">United States (US)</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VA">Vatican</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="WS">Western Samoa</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>

                    </select>
                </div>
                <div class="col_half">
                    <input type="text" class="sm-form-control" placeholder="State / Country" />
                </div>

                <div class="col_half col_last">
                    <input type="text" class="sm-form-control" placeholder="PostCode / Zip" />
                </div>
                <a href="#" class="button button-3d nomargin button-black">@lang('page.updateTotal')</a>
            </form>
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
                            <span class="amount">${{Cart::total()}}</span>
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
                            <span class="amount color lead"><strong>${{Cart::total()}}</strong></span>
                        </td>
                    </tr>
                    </tbody>

                </table>

            </div>
        </div>
    </div>

    @else
        購物車是空的
    @endif

</div>

<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
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