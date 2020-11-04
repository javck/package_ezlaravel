@extends('layouts.site')

@section('seo')
	@parent
	<meta name="keywords" content="">
    <meta name="description" content="">
@stop

@section('page_title'){{ trans('page.article') }} @stop

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/prism.css')}}" type="text/css" />
@stop

@section('body')
	@include('Ezlaravel::partials.article')
@stop

@section('js')
<script type="text/javascript" src="{{asset('js/prism.js')}}"></script>
@stop
