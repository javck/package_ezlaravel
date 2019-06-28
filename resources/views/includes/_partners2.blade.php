@if (isset($item_partners2_top) && isset($items_partners2))
	<div class="container clearfix">
		<div class="heading-block center"><h3>{{ $item_partners2_top->title }}</h3></div>
		<div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">
		@foreach ($items_partners2 as $item)
			<div class="oc-item"><a href="{{ $item->url }}"><img src="images/{{ $item->pic }}" alt="{{ $item->alt }}"></a></div>
		@endforeach
		</div>
	</div>
@endif