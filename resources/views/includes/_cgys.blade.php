<div class="container clearfix">
	<div class="row grid-item clearfix">
		@foreach ($cgys as $item)
			<div class="col-md-2 grid-image">
				<img src="{{ Voyager::image($item->pic) }}" alt="{{ $item->title }}">
			</div>
			<div class="col-md-2">
				<div class="grid-info clearfix">
					<h3><a href="{{ url('/cgys/'.{{ $item->id }}) }}">{{ $item->title }}<span>{{ $item->desc }}</span></a></h3>
				</div>
			</div>
		@endforeach
	</div>
</div>