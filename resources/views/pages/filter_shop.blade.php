@extends('layouts.site')

@section('seo')
	@isset($keywords)
	    <meta name="keywords" content="{{ $keywords }}">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ $description }}">
	@endisset
@stop
@section('page_title','商店')

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
	<div class="container clearfix">

		<!-- Post Content
		============================================= -->
		<div class="postcontent nobottommargin col_last">

			<!-- 商品Grid
			============================================= -->
			<div id="shop" class="shop product-3 grid-container clearfix">

				@foreach ($items as $item)
					<div class="product sf-{{$item->cgy_id}} clearfix">
						<div class="product-image">
							@if ($item->getPicByIndex(0) != null)
								<a href="#"><img src="{{url('images/'.$item->getPicByIndex(0))}}" alt="{{$item->title}}"></a>
							@endif
							@if ($item->getPicByIndex(1) != null)
								<a href="#"><img src="{{url('images/'.$item->getPicByIndex(1))}}" alt="{{$item->title}}"></a>
							@endif
	
							
							{{-- <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a> --}}
							<div class="product-overlay">
								<a href="{{$item->id}}" class="add-to-cart"><i class="icon-shopping-cart"></i><span>{{__('page.addCart')}}</span></a>
								<a href="{{url('api/items/show?item_id='.$item->id)}}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> {{__('page.quickView')}}</span></a>
							</div>
						</div>
						<div class="product-desc center">
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

			</div><!-- #shop end -->
			<br/><br/>
			@include('easyweb2::includes._partners')
		</div><!-- .postcontent end -->

		<!-- Sidebar
		============================================= -->
		<div class="sidebar nobottommargin">
			<div class="sidebar-widgets-wrap">

				<div class="widget widget-filter-links clearfix">

					<h4>{{__('page.shopCgies')}}</h4>
					<ul class="custom-filter" data-container="#shop" data-active-class="active-filter">
						<li class="widget-filter-reset active-filter"><a href="#" data-filter="*">{{__('page.reset')}}</a></li>
						@foreach ($cgies as $cgy)
							<li><a href="#" data-filter=".sf-{{$cgy->id}}">{{$cgy->title}}</a></li>
						@endforeach
					</ul>

				</div>

				<div class="widget widget-filter-links clearfix">

					<h4>{{__('page.sortBy')}}</h4>
					<ul class="shop-sorting">
						<li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">{{__('page.reset')}}</a></li>
						<li><a href="#" data-sort-by="name">{{__('page.itemName')}}</a></li>
						<li><a href="#" data-sort-by="price_lh">{{__('page.priceAsc')}}</a></li>
						<li><a href="#" data-sort-by="price_hl">{{__('page.priceDesc')}}</a></li>
					</ul>

				</div>

			</div>
		</div><!-- .sidebar end -->

		

	</div>

@stop

@section('js')

	<script>
		jQuery(document).ready( function($){

			//處理商品排序作業
			$('#shop').isotope({
				transitionDuration: '0.65s',
				getSortData: {
					name: '.product-title',
					price_lh: function( itemElem ) {
						if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
							var price = $(itemElem).find('.product-price ins').text();
						} else {
							var price = $(itemElem).find('.product-price').text();
						}

						priceNum = price.split("$");

						return parseFloat( priceNum[1] );
					},
					price_hl: function( itemElem ) {
						if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
							var price = $(itemElem).find('.product-price ins').text();
						} else {
							var price = $(itemElem).find('.product-price').text();
						}

						priceNum = price.split("$");

						return parseFloat( priceNum[1] );
					}
				},
				sortAscending: {
					name: true,
					price_lh: true,
					price_hl: false
				}
			});

			$('.custom-filter:not(.no-count)').children('li:not(.widget-filter-reset)').each( function(){
				var element = $(this),
					elementFilter = element.children('a').attr('data-filter'),
					elementFilterContainer = element.parents('.custom-filter').attr('data-container');

				elementFilterCount = Number( jQuery(elementFilterContainer).find( elementFilter ).length );

				element.append('<span>'+ elementFilterCount +'</span>');

			});

			$('.shop-sorting li').click( function() {
				$('.shop-sorting').find('li').removeClass( 'active-filter' );
				$(this).addClass( 'active-filter' );
				var sortByValue = $(this).find('a').attr('data-sort-by');
				$('#shop').isotope({ sortBy: sortByValue });
				return false;
			});

			//處理商品排序作業結束=======================================

			//處理商品加入購物車作業
	        $('.add-to-cart').click(function(event){
	        	console.log('add to cart');
	            event.preventDefault();
	            var item_id = $(this).attr('href');
	            //console.log("{{url('/api/shop/addCart?id=')}}" + item_id + "&qty=1");
	            $.ajax({

	                type: "get",
	                url: "{{url('/api/shop/addCart?id=')}}" + item_id + "&qty=1",
	                success: function (data) {
	                    $('#top-cart').load("{{url('/api/page/loadTopCart')}}",function(){
				        	$.getScript("{{asset('js/functions.js')}}");
				        });
	                },
	                error: function (data) {
	                    console.log('Error:', data);
	                }
	            });
	        });

	        jQuery('[data-lightbox="ajax"]').on('mfpClose', function(e) {
	            //console.log('lightbox close');
	            
	            $('#top-cart').load("{{url('/api/page/loadTopCart')}}",function(){
				    $.getScript("{{asset('js/functions.js')}}");
				});
	        });

	        //處理商品加入購物車作業=======================================

		});
	</script>
@stop