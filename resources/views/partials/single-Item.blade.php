<div id="modal" class="single-product shop-quick-view-ajax clearfix">

    <div class="ajax-modal-title">
        <h2>{{$item->title}}</h2>
    </div>

    <div class="product modal-padding clearfix">

        <div class="col_half nobottommargin">
            <div class="product-image">
                <div class="fslider" data-pagi="false">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            @foreach($item->getPicArray() as $pic)
                            <div class="slide"><a href="{{asset('images/'.$pic)}}" title="{{$item->title}}"><img src="{{asset('images/'.$pic)}}" alt="{{$item->title}}"></a></div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @if(isset($item->badge))
                    <div class="sale-flash">{{$item->badge}}</div>
                @endif
            </div>
        </div>
        <div class="col_half nobottommargin col_last product-desc">
            <div class="product-price">
                @if(isset($item->price_new))
                    <del>${{$item->price_og}}</del>
                    <ins>${{$item->price_new}}</ins>
                @else
                    ${{$item->price_og}}
                @endif
            </div>
            <div class="product-rating">
                @for($i = 1 ; $i <= $item->star/2 ; $i++ )
                    <i class="icon-star3"></i>
                @endfor
                @if($item->star % 2 == 1)
                    <i class="icon-star-half-full"></i>
                @endif
            </div>
            <div class="clear"></div>
            <div class="line"></div>

            <!-- Product Single - Quantity & Cart Button
            ============================================= -->
            <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data' action="">
                {{ csrf_field() }}
                <input id="id" name="id" type="hidden" value="{{$item->id}}">
                <input id="lastPage" name="lastPage" type="hidden" value="{{$path}}">
                <div class="quantity clearfix">
                    <input id="btn-minus" type="button" value="-" class="minus">
                    <input id="qty" type="text" step="1" min="1"  name="qty" value="1" title="Qty" class="qty" size="4" />
                    <input id="btn-plus" type="button" value="+" class="plus">
                </div>
                <button id="add-to-cart" type="button" class="add-to-cart button nomargin">{{trans('page.addCart')}}</button>
            </form><!-- Product Single - Quantity & Cart Button End -->

            <div class="clear"></div>
            <div class="line"></div>
            <p>{!! $item->desc !!}</p>
            <ul class="iconlist">
                @foreach($item->getCharsArray() as $char)
                    <li><i class="icon-caret-right"></i> {{$char}}</li>
                @endforeach
            </ul>
            <div class="panel panel-default product-meta nobottommargin">
                <div class="panel-body">
                    <span itemprop="productID" class="sku_wrapper">{{trans('page.sku')}}: <span class="sku">{{$item->sku}}</span></span>
                    <span class="posted_in">{{trans('page.itemCgy')}}: <a href="#" rel="tag">{{$item->cgy->title}}</a>.</span>
                    <span class="tagged_as">{{trans('page.tag')}}:
                        @foreach($item->tags as $tag)
                            @if(!$loop->last)
                                <a href="#" rel="tag">{{$tag->title}}</a>,
                            @else
                                <a href="#" rel="tag">{{$tag->title}}</a>.
                            @endif
                        @endforeach
                    </span>
                </div>
            </div>
        </div>

    </div>

</div>

<script>
    $(document).ready(function(){
        var url = document.URL;
        if (url.slice(-1) == '#'){
            url = url.substr(0,url.length-1);
        }
        $('#btn-minus').click(function(){
            //console.log('minus');
            var qty = $('#qty').val();
            if(qty >1){
                qty -= 1;
            }
            $('#qty').val(qty);
        });

        $('#btn-plus').click(function(){
            //console.log('plus');
            var stock = {{$item->stock}};
            var qty = parseInt($('#qty').val());
            if(qty < stock){
                qty = qty + 1;
            }
            $('#qty').val(qty);
        });

        $('#add-to-cart').click(function(event){
            //event.preventDefault();
            var item_id = $('#id').val();
            console.log('item_id:' + item_id);
            var qty = $('#qty').val();
            console.log(url + 'api/shop/addCart?id=' + item_id + "&qty=" + qty );
            $.ajax({

                type: "get",
                url: url + 'api/shop/addCart?id=' + item_id + "&qty=" + qty,
                success: function (data) {
                    //console.log(data);
                    //$('#modal').close();
                    $.magnificPopup.close();
                    //location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

    });
</script>

