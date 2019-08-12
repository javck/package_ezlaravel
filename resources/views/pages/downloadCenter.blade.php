@extends('layouts.site')
@section('seo')
	@isset($keywords)
	    <meta name="keywords" content="{{ $keywords }}">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ $description }}">
	@endisset
@stop
@section('page_title')下載中心 @stop

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="col_full">
				<h1 class="text-center"> {{ $top->title }}</h1>
				<img src="{{asset('images/'.$top->pic)}}" width="100%" />

				<div class="clear"></div>

				{!! $top->content !!}

				<div class="clear"></div>
			</div>
		</div>
	</div>
	@include('easyweb2::partials.articles')
@stop