@extends('layouts.site')
@section('seo')
	@isset($keywords)
	    <meta name="keywords" content="{{ $keywords }}">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ $description }}">
	@endisset
@stop
@section('page_title')最新消息 @stop

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
	@include('easyweb2::partials.articles')
@stop