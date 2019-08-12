@extends('layouts.site')
@section('seo')
	@isset($keywords)
	    <meta name="keywords" content="{{ $keywords }}">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ $description }}">
	@endisset
@stop
@section('page_title')提交訂單@stop

@section('page_top')
@stop

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
    @include('easyweb2::includes._checkout')
@stop

@section('js')
    <script type="text/javascript">
        jQuery(window).load(function () {

        });
    </script>

@stop