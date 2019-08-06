<div class="container">
	<div class="fancy-title title-dotted-border mt-4 mb-1 title-center">
		<h4>{{ $tag->title }}</h4>
	</div>
	<div id="oc-products" class="owl-carousel products-carousel carousel-widget" data-margin="20" data-loop="false" data-autoplay="5000" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-items-xl="5">
		@foreach ($tag->items as $item)
			<div class="oc-item">
				<div class="product iproduct clearfix">
					<div class="product-image">
						@php
							$pics = json_decode($item->pics , true);
						@endphp
						<div class="fslider" data-arrows="false" data-autoplay="4500">
							<div class="flexslider">
								<div class="slider-wrap">
									@foreach ($pics as $pic)
										<div class="slide"><a href="{{url('api/items/show?item_id='.$item->id)}}"><img src="{{ Voyager::image($pic) }}" alt="{{ $item->title }}"></a></div>
									@endforeach
								</div>
							</div>
						</div>
						<div class="product-overlay">
							<a href="{{$item->id}}" class="add-to-cart"><i class="icon-shopping-cart"></i><span>{{trans('page.addCart')}}</span></a>
							<a href="{{url('api/items/show?item_id='.$item->id)}}" class="item-quick-view" data-lightbox="ajax"><i class="icon-line-search"></i><span>{{trans('page.quickView')}}</span></a>
						</div>
					</div>
					<div class="sale-flash">{{ $item->badge }}</div>
					<div class="product-desc">
						<div class="product-title mb-1"><h3><a href="{{url('api/items/show?item_id='.$item->id)}}">{{$item->title}}</a></h3>
						</div>
						<div class="product-price font-primary">
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
            console.log(url + 'api/shop/addCart?id=' + item_id + "&qty=1");
            $.ajax({
                type: "get",
                url: url + 'api/shop/addCart?id=' + item_id + "&qty=1",
                success: function (data) {
                	console.log(data);
                    //location.reload();
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
