@extends('layouts.site_noHeader')
@section('seo')
	<meta name="keywords" content="{{ $keywords }}">
    <meta name="description" content="{{ $description }}">
@stop
@section('page_title')搜尋結果@stop

@section('body')
	<div class="container clearfix">
		<gcse:searchresults-only></gcse:searchresults-only>

	</div>
@stop

@section('js')
	<script>
  (function() {
    var cx = '015872180671962479057:ju3bc5b0tne';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
@stop

