<div class="tabs topmargin-lg clearfix" id="tab-shop">

    <ul class="tab-nav clearfix">
        @foreach($tags_shop as $tag)
            <li><a href="#tabs-{{$tag->id}}">{{$tag->title}}</a></li>
        @endforeach
    </ul>

    <div class="tab-container">
        @foreach($tags_shop as $tag)
            <div class="tab-content clearfix" id="tabs-{{$tag->id}}">

                <div id="shop_{{$loop->iteration}}" class="shop clearfix">
                    @foreach($tag->items as $item)
                        <div class="product clearfix">
                            <div class="product-image">
                                @foreach($item->getPicArray() as $image)
                                    @if($loop->iteration <= 2)
                                        <a href="#"><img src="{{asset('images/'.$image)}}" alt="{{$item->title}}"></a>
                                    @endif
                                @endforeach
                                @if(isset($item->badge))
                                    <div class="sale-flash">{{$item->badge}}</div>
                                @endif
                                <div class="product-overlay">
                                    {{--<a href="{{url('shop/addCart?id='.$item->id.'&qty=1')}}" class="add-to-cart"><i--}}
                                                {{--class="icon-shopping-cart"></i><span>{{trans('page.addCart')}}</span></a>--}}
                                    <a href="{{$item->id}}" class="add-to-cart"><i
                                    class="icon-shopping-cart"></i><span>{{trans('page.addCart')}}</span></a>
                                    <a href="{{url('api/items/show?item_id='.$item->id)}}" class="item-quick-view"
                                       data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> {{trans('page.quickView')}}</span></a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">{{$item->title}}</a></h3></div>
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
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>

</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script>
    $(document).ready(function(){
        var url = document.URL;
        if (url.slice(-1) == '#'){
            url = url.substr(0,url.length-1);
        }
        //console.log('url:' + url);
        //$('#top-cart').load("{{url('api/page/loadTopCart')}}");
        $('.add-to-cart').click(function(event){
            event.preventDefault();
            var item_id = $(this).attr('href');
            //console.log(url + 'api/shop/addCart?id=' + item_id + "&qty=1");
            $.ajax({

                type: "get",
                url: url + 'api/shop/addCart?id=' + item_id + "&qty=1",
                success: function (data) {
                    //console.log(data);

                    location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        jQuery('[data-lightbox="ajax"]').on('mfpClose', function(e) {
            //console.log('lightbox close');
            location.reload();
            //$('#top-cart').load("{{url('api/page/loadTopCart')}}");
        });
    });

</script>