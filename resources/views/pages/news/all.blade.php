@extends('layouts.site_noHeader')
@section('seo')
	<meta name="keywords" content="{{ $keywords }}">
    <meta name="description" content="{{ $description }}">
@stop
@section('page_title'){{ trans('page.newsAll') }} @stop
@section('body')
	@include('easyweb2::partials.articles')
@stop