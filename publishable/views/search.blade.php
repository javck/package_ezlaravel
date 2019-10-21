@extends('layouts.site')
@section('seo')
	<meta name="keywords" content="程式設計, 青少年程式設計, goblinLab, 哥布林程式, 程式設計學苑, PHP, Laravel, CoronaSDK, Lua, 查詢">
    <meta name="description" content="{{ setting('site.description') }}">
@stop
@section('page_title')搜尋結果@stop

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
	<div class="container clearfix">
		<gcse:searchresults-only></gcse:searchresults-only>

	</div>
@stop

@section('js')
	<script>
  (function() {
    var cx = '{{ setting("admin.google_search_id") }}';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
@stop

