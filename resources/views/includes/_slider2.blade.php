<div class="row clearfix common-height">
	@if (isset($items_banner))
		<div class="fslider bottommargin" data-animation="fade">
			<div class="flexslider">
				<div class="slider-wrap">
					@foreach ($items_banner as $item)
						<div class="slide">
							<a href="{{ $item->url }}">
								<img src="{{asset('images/'.$item->pic)}}" alt="{{ $item->alt }}">
							</a>
							@if ($item->title_pos != 'none')
								<div class="flex-caption slider-caption-bg {{$item->title_pos == "botRight" ?"slider-caption-bottom-right" :""}}"></div>
							@endif
							
						</div>
					@endforeach
				</div>
			</div>
		</div>
	@endif
</div>