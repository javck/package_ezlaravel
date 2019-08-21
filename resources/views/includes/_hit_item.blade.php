@if(isset($item))
	<div class="section nobg">
		<div class="container clearfix">
			<div class="row clearfix">
				<div class="col-lg-5">
					<div id="oc-images" class="custom-js">
						<div class="oc-item">
							<a href="{{ Voyager::image($item->getFirstPic()) }}"><img src="{{ Voyager::image($item->getFirstPic()) }}" alt="{{  $item->title }}"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="featured-item topmargin">
						<div class="item-title">
							<div class="before-heading t600 ls5"><a href="#" style="color: #aab7bd !important;">{{ $item->cgy->title }} <i class="icon-angle-right"></i></a></div>
							<h3><a href="{{url('api/items/show?item_id='.$item->id)}}" class="item-quick-view" data-lightbox="ajax">{{ $item->title }}</a></h3>
						</div>
						@if ($item->sku != null || $item->badge != null)
							<div class="item-meta font-secondary">
								@if ($item->sku != null)
									SKU: {{ $item->sku }}.
								@endif
								@if ($item->badge != null)
									主打: {{ $item->badge }}
								@endif
							</div>
						@endif
						
						<div class="clear"></div>
						<div class="item-desc">
							{!! $item->desc!!}
						</div>
						{{-- <div class="item-color bottommargin-sm">
							<span>可選色系:</span>
							<div id="item-color-dots" class="owl-dots"></div>
						</div> --}}
						<div data-href="{{url('api/items/show?item_id='.$item->id)}}" class="button button-border button-circle nomargin font-secondary item-quick-view" id="more"  data-lightbox="ajax">{{ __('page.more') }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		jQuery(document).ready( function($){

		});
	</script>
@endif

