<section id="slider" class="slider-element full-screen slider-parallax">
	<div class="slider-parallax-inner" style="background: url('{{ $item_slider->getPicUrl() }}') center center no-repeat; background-size: cover;">
		<div class="vertical-middle" style="z-index: 2;">
			<div class="container dark clearfix">
				<div class="row clearfix">
					<div class="col-lg-6 col-md-8">
						<div class="emphasis-title">
							<h1 class="font-body">{{ $item_slider->title }}<br>{{ $item_slider->subtitle }}</h1>
						</div>
						<a 
						@if (substr( $item_slider->url, 0, 1 ) === "#")
							href="#"
						@else
							href="{{ $item_slider->url }}"
						@endif
						@if (substr( $item_slider->url, 0, 1 ) === "#")
							data-scrollto={{ $item_slider->url }}
						@endif
						data-easing="easeInOutExpo" data-speed="1250" data-offset="160" class="button button-large button-white button-light capitalize" style="border-radius: 23px;">{{ $item_slider->url_txt }}</a>
						{!! $item_slider->content !!}
						{{-- <a href="https://www.youtube.com/watch?v=N_r349riLEE" class="hero-action-link" data-lightbox="iframe"><i class="icon-play-sign"></i> Watch the Video</a> --}}
					</div>
				</div>
			</div>
		</div>
		<div class="video-wrap" style="position: absolute; height: 100%; z-index: 1;">
			<div class="video-overlay" style="background: rgba(0,0,0,0.2);"></div>
		</div>
	</div>
</section>