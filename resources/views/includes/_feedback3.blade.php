<div class="section bottommargin-lg" style="background-color: #F8FAFB; border-top: 1px solid #E5E5E5; border-bottom: 1px solid #E5E5E5;">

	<div class="fslider testimonial testimonial-full nobg noborder noshadow" data-animation="fade" style="max-width: none;">
		<div class="flexslider">
			<div class="slider-wrap divcenter" style="max-width: 650px;">
				@foreach ($items as $item)
					<div class="slide">
						<div class="testi-image">
							<img src="{{ $item->getPicUrl() }}" alt="Customer Testimonails">
						</div>
						<div class="testi-content">
							<p>{!! $item->content !!}</p>
							<div class="testi-meta">
								{{ $item->title }}
								<span>{{ $item->subtitle }}</span>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>

</div>
