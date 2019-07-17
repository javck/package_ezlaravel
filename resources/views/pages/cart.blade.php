@extends('layouts.site')
@section('seo')
	@isset($keywords)
	    <meta name="keywords" content="{{ $keywords }}">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ $description }}">
	@endisset
@stop
@section('page_title')我的購物車@stop

@section('page_top')
@stop

@section('pri_nav')
    {{ menu('frontend','menu.classic') }}
@stop

@section('body')
    @include('includes._cart')
@stop

@section('js')
    <script type="text/javascript">
        jQuery(window).load(function () {

        });
    </script>

@stop