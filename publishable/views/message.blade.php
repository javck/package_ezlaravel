@extends('layouts.site')

@section('seo')
    @parent
	<meta name="keywords" content="訊息頁">
    <meta name="description" content="{{ setting('site.description') }}">
@stop
@section('page_title'){{ trans('page.policy') }}@stop

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
<div class="clear"></div>
<div class="container clearfix topmargin bottommargin">
    <div class="feature-box fbox-center fbox-light fbox-plain">
        <div class="fbox-icon">
            <i class="{{ $icon }}"></i>
        </div>
        <h2>{{ $title }}</h2>
        <p>{!! $content !!}</p>
    </div>
</div>
@stop
