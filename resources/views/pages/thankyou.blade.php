@extends('layouts.site')
@section('seo')
	@isset($keywords)
	    <meta name="keywords" content="{{ $keywords }}">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ $description }}">
	@endisset
@stop
@section('page_title')填寫表單成功@stop
	
@section('body')
	<div class="container clearfix">

		<div class="heading-block center nobottomborder">
			<h1>感謝您填寫表單與指教</h1>
			<i class="icon-checkmark" style="font-size: 96px;color: green;"></i>
			<span>我們將儘快與您聯絡，並提供您所需要的協助！</span>
		</div>

		<div class="col_one_third topmargin">
			<div class="feature-box fbox-center fbox-light fbox-plain">
				<div class="fbox-icon">
					<a href="#"><i class="icon-warning-sign"></i></a>
				</div>
				<h3>會員優惠資訊</h3>
				<p>會員限定活動.活動優惠券，關注電子報好康不漏接</p>
			</div>
		</div>

		<div class="col_one_third topmargin">
			<div class="feature-box fbox-center fbox-light fbox-plain">
				<div class="fbox-icon">
					<a href="#"><i class="icon-time"></i></a>
				</div>
				<h3>最新產業資訊</h3>
				<p>所有產業的最新資訊，都透過電子報讓您知道</p>
			</div>
		</div>

		<div class="col_one_third topmargin col_last">
			<div class="feature-box fbox-center fbox-light fbox-plain">
				<div class="fbox-icon">
					<a href="#"><i class="icon-email3"></i></a>
				</div>
				<h3>最新消息通知</h3>
				<p>關注我們的最新消息嗎?隨時通知您最新動態</p>
			</div>
		</div>

	</div>
@stop