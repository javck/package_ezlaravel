<div class="container clearfix">
	<div class="row grid-item clearfix">
		@foreach ($items as $item)
			<div class="col-md-2 grid-image">
				<img src="{{ Voyager::image($item->pic) }}" alt="{{ $item->alt }}">
			</div>
			<div class="col-md-2">
				<div class="grid-info clearfix">
					<h3><a href="{{ $item->url }}">{{ $item->title }}<span>{{ $item->subtitle }}</span></a></h3>
					<a href="{{ $item->url }}" class="more-link clearfix">{{ $item->url_txt }}</a>
				</div>
			</div>
		@endforeach
	</div>
</div>