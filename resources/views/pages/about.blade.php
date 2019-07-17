@extends('layouts.site')
@section('seo')
    @isset($keywords)
	    <meta name="keywords" content="{{ $keywords }}">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ $description }}">
	@endisset
@stop
@section('page_title')關於我們@stop

@section('pri_nav')
    {{ menu('frontend','menu.classic') }}
@stop

@section('page_top')
	<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('images/{{$page_top->pic}}'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

		<div class="container clearfix">
			<h1>{{$page_top->title}}</h1>
			<span>{{$page_top->subtitle}}</span>
		</div>

	</section>
@stop

@section('body')

		<div class="container clearfix">
			@foreach($items_row1 as $item)
				<div class="col_one_third {{ $loop->last == true ? "col_last": "" }}">

					<div class="heading-block fancy-title nobottomborder title-bottom-border">
						<h4>{{ $item->title }} <span>{{ $item->subtitle }}</span>.</h4>
					</div>

					<p>{{ $item->content  }}</p>

				</div>
			@endforeach

		</div>

		<div class="container clearfix">

			<div class="clear"></div>

			<div class="heading-block center">
				<h4>{{ $item_row2->title }}</h4>
			</div>

			<ul class="clients-grid grid-6 nobottommargin clearfix">
				@foreach($items_row3 as $item)
					<li><a href="{{$item->url}}"><img src="images/{{$item->pic}}" alt="{{$item->alt}}"></a></li>
				@endforeach
			</ul>

		</div>

		<div class="section footer-stick">

			<h4 class="uppercase center">{!! $item_row4->content !!}</h4>

			<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
				<div class="flexslider">
					<div class="slider-wrap">
						@foreach($items_row5 as $item)
							<div class="slide">
								<div class="testi-image">
									<a href="{{$item->url}}"><img src="images/{{$item->pic}}" alt="{{$item->alt}}"></a>
								</div>
								<div class="testi-content">
									<p>{{$item->content}}</p>
									<div class="testi-meta">
										{{$item->title}}
										<span>{{$item->subtitle}}</span>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
@stop

@section('js')
	<script type="text/javascript">
	jQuery(window).load( function(){

	});
	</script>

@stop