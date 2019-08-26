@if ( isset($items) )
	<div class="container clearfix">
		@if( isset($item_top) )
		    <div class="center" style="margin-top:5%;">
		      <h1>{{ $item_top->title }}</h1>
		    </div>
		@endif

		<div class="line"></div>

		@foreach($items as $item)
			<div class="col_one_third @if($loop->index % 3 == 2) col_last @endif @if($loop->remaining <3)nobottommargin @endif">
				<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
					<div class="fbox-icon">
						<i class="{{ $item->icon }}"></i>
					</div>
					<h3>{{ $item->title }}</h3>
					<p>{!! $item->content !!}</p>
				</div>
			</div>
		
		@if($loop->index % 3 == 2 || $loop->last == true)
			<div class="clear"></div>
		@endif

		@endforeach

	</div>
@endif