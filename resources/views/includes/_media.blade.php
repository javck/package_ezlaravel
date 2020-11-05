<div class="container">
	<div class="col_two_fifth nobottommargin">
		<a href="{{ $item->url }}" data-lightbox="iframe">
			<img src="{{ Voyager::image( $item->pic ) }}" alt="{{ $item->alt }}">
			<span class="i-overlay"><img src="images/icons/play.png" alt="Play"></span>
		</a>
	</div>

	<div class="col_three_fifth nobottommargin col_last">
		<div class="heading-block">
			<h2>{{ $item->title }}</h2>
		</div>
		{!! $item->content !!}
	</div>
</div>