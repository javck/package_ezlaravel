<section id="slider" class="slider-element swiper_wrapper full-screen clearfix" data-autoplay="9000" data-speed="800" data-loop="true" data-grab="false">
	<div class="swiper-container swiper-parent">
		<div class="swiper-wrapper">
			@foreach ($items_slider as $item)
				<div class="swiper-slide" style="background: #FFF url({{ Voyager::image($item->pic) }}) no-repeat center right; background-size: auto 100%;">
					<div class="container clearfix">
						<div class="slider-caption" style="margin-top: -30px;">
							<div class="emphasis-title nobottommargin">
								<h2 class="bottommargin t700" style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">{{ $item->title }}</h2>

								<p class="lead topmargin-sm d-none d-sm-block" style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">{!! $item->content !!}</p>
							</div>
						</div>
					</div>
					<div class="slide-number font-primary">{{ $loop->iteration }}</div>
				</div>
			@endforeach
		</div>
		<div class="slider-arrow-left"><i class="icon-line-arrow-left"></i></div>
		<div class="slider-arrow-right"><i class="icon-line-arrow-right"></i></div>
	</div>
</section><!-- #Slider End -->