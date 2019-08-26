<div id="section-gallery" class="page-section nopadding nomargin">

	<div class="container topmargin bottommargin-lg center clearfix">

		<h3 class="ls1 t400" style="font-size: 32px; margin-bottom: 10px;">{{ $item_top->title }}</h3>
		<p class="lead divcenter" style="max-width: 600px">{{ $item_top->subtitle }}</p>
		<a href="{{ $item_top->url }}" class="button button-circle capitalize">{{ $item_top->url_txt }}</a>

	</div>

	<div class="owl-carousel owl-carousel-full image-carousel carousel-widget bottommargin" data-margin="20" data-center="true" data-loop="true" data-nav="false" data-pagi="true" data-items-xs="2" data-items-sm="2" data-items-md="4" data-items-lg="4" data-items-xl="6" data-stage-padding="30" data-lightbox="gallery">
		@foreach ($items as $item)
			<div class="oc-item">
				<a data-lightbox="gallery-item" href="{{ Voyager::image($item->pic) }}"><img src="{{ Voyager::image($item->pic) }}" alt="{{ $item->alt }}"></a>
			</div>
		@endforeach

	</div>

</div>
