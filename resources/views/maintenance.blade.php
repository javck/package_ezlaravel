@extends('layouts.site')
@section('seo')
	@parent
	@isset($keywords)
	    <meta name="keywords" content="{{ $keywords }}">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ $description }}">
	@endisset
@stop

@section('page_title')維修中@stop

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
	<div class="container clearfix">

		<div class="heading-block center nobottomborder">
			<h1>網站為了提供新功能，正在下線維修中</h1>
			<span>請稍等一下，等會再回來吧!</span>
		</div>

		<div class="col_one_third topmargin">
			<div class="feature-box fbox-center fbox-light fbox-plain">
				<div class="fbox-icon">
					<i class="icon-warning-sign"></i>
				</div>
				<h3>為什麼網站會下線?</h3>
				<p>主要是因為網站為了對用戶提供更便利的功能做了較大的改版，為了避免造成困擾，就會暫時下線</p>
			</div>
		</div>

		<div class="col_one_third topmargin">
			<div class="feature-box fbox-center fbox-light fbox-plain">
				<div class="fbox-icon">
					<a href="#"><i class="icon-time"></i></a>
				</div>
				<h3>大概會下線多久?</h3>
				<p>不一定，要看更新的內容量。但一般都會在15分鐘內恢復上線。</p>
			</div>
		</div>

		<div class="col_one_third topmargin col_last">
			<div class="feature-box fbox-center fbox-light fbox-plain">
				<div class="fbox-icon">
					<a href="#"><i class="icon-email3"></i></a>
				</div>
				<h3>你需要支援嗎?</h3>
				<p>假如您需要緊急支持的話，歡迎寫信到 <a href="mailto:{{ json_decode(setting('constant.service_mail'),true) }}">{{ json_decode(setting('constant.service_mail'),true) }}</a> 。我們會儘快回覆您...</p>
			</div>
		</div>

	</div>

@stop