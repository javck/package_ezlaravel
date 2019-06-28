<div class="section topmargin-sm nobottommargin">

	<div class="container-fluid clearfix">

		@if (isset($item_feedback2_top))
			<div class="center">
				<h3>{{ $item_feedback2_top->title }}</h3>
				<span>{{ $item_feedback2_top->content }}</span>
			</div>
		@endif
		
		@if (isset($items_feedback2))
			<ul class="testimonials-grid grid-2 clearfix nobottommargin">
				@foreach ($items_feedback2 as $item)
					<li>
						<div class="testimonial">
							<div class="testi-image">
								<img src="{{asset('images/'.$item->pic)}}" alt="{{ $item->alt }}"/>
							</div>
							<div class="testi-content">
								<p>{!! $item->content !!}</p>
								@if ($item->subtitle != null)
									<div class="testi-meta">
										{{ $item->subtitle }}
									</div>
								@endif
								
							</div>
						</div>
					</li>
				@endforeach
			</ul>
		@endif

	</div>
</div>