@extends('layouts.site_noHeader')
@section('seo')
	@parent
	@isset($keywords)
	    <meta name="keywords" content="{{ $keywords }}">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ $description }}">
	@endisset
@stop
@section('page_title'){{ trans('menu.mediasPage') }}@stop

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
<section id="content">

	<div class="content-wrap">
		<div class="container clearfix">
			<!-- Top區塊-->
				<div class="col_full">

					<div class="heading-block center nobottomborder">
						<h2>{{ $item_top->title }}</h2>
						<span>{{ $item_top->content}}</span>
					</div>

				</div><!-- Top區塊結束-->

		</div>

		<div class="section nobottommargin">

			<div class="container clearfix">

				<div class="fancy-title title-center title-dotted-border topmargin">
					<h3>多媒體展示</h3>
				</div>

				@include('easyweb2::partials.medias')


			</div>

		</div>
	</div>
</section><!-- #content end -->
	<!-- Call To Action  -->
	@include('easyweb2::partials.action')
@stop