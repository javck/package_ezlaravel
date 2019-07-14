@extends('layouts.site')
@section('seo')
	<meta name="keywords" content="">
    <meta name="description" content="">
@stop
@section('page_title')最新消息 @stop
@section('body')
	{{--<div class="content-wrap">--}}
		{{--<div class="container clearfix">--}}
			{{--<div class="col_full">--}}
				{{--<h1 class="text-center"> {{ $top->title }}</h1>--}}
				{{--<img src="{{asset('images/'.$top->pic)}}" width="100%" />--}}

				{{--<div class="clear"></div>--}}

				{{--{!! $top->content !!}--}}

				{{--<div class="clear"></div>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
	@include('partials.articles')
@stop