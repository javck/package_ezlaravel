@extends('layouts.site')
@section('seo')
	@parent
	@isset($keywords)
	    <meta name="keywords" content="最新消息">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ setting('site.description') }}">
	@endisset
@stop
@section('page_title')最新消息 @stop

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
	@include('easyweb2::partials.articles')
@stop