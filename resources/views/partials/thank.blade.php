@extends('layouts.site_noHeader')
@section('seo')
	<meta name="keywords" content="">
    <meta name="description" content="">
    <!-- Global site tag (gtag.js) - Google AdWords: 828683183 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-828683183"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	gtag('config', 'AW-828683183',{'send_page_view':false});
	</script>
	<!-- Event snippet for 報名課程完成 conversion page -->
	<script>
	  gtag('event', 'conversion', {'send_to': 'AW-828683183/dvLwCJ2pp3kQr-eSiwM'});
	</script>

@stop
@section('page_title'){{ trans('page.thank') }}@stop
	
@section('body')
	<div class="container clearfix">

		<div class="heading-block center nobottomborder">
			<h1>{{ trans('page.thank_title' ,['course' => $course])}}</h1>
			<i class="icon-checkmark" style="font-size: 96px;color: green;"></i>
			<span>{{ trans('page.contact_soon') }}</span>
		</div>

		<div class="col_one_third topmargin">
			<div class="feature-box fbox-center fbox-light fbox-plain">
				<div class="fbox-icon">
					<a href="#"><i class="icon-warning-sign"></i></a>
				</div>
				<h3>{{ trans('page.member_profit_title') }}</h3>
				<p>{{ trans('page.member_profit') }}</p>
			</div>
		</div>

		<div class="col_one_third topmargin">
			<div class="feature-box fbox-center fbox-light fbox-plain">
				<div class="fbox-icon">
					<a href="#"><i class="icon-time"></i></a>
				</div>
				<h3>{{ trans('page.new_info_title') }}</h3>
				<p>{{ trans('page.new_info') }}</p>
			</div>
		</div>

		<div class="col_one_third topmargin col_last">
			<div class="feature-box fbox-center fbox-light fbox-plain">
				<div class="fbox-icon">
					<a href="#"><i class="icon-email3"></i></a>
				</div>
				<h3>{{ trans('page.new_article_title') }}</h3>
				<p>{{ trans('page.new_article') }}</p>
			</div>
		</div>

		<div class="clearfix">
			<h4>{{trans('menu.subscribeUs')}}</h4>
			<p>{{trans('menu.whySubscribe')}}</p>
			{{-- <div class="widget-subscribe-form-result"></div> --}}
			<script type="text/javascript">var submitted=false;</script>
			<iframe id="hidden_iframe2" name="hidden_iframe2" style="display: none;" onload="if(submitted) {window.location='http://goblinlab.org/public/thank';}"></iframe>
			<form action="http://www.newsleopard.com/mailverify.htm?x=000000005a93e693015afa3db0b24855" class="nobottommargin" target="hidden_iframe2" method="post" onsubmit="submitted=true;">

				<div class="form-process"></div>
				<div class="col_one_third">
					<input type="text" id="name" name="name" value="" class="input_header sm-form-control required show-error-msg" placeholder="{{ trans('messages.inputName') }}" />
				</div>

				<div class="col_one_third">
					<input type="email" id="mail" name="email" value="" class="input_header required email sm-form-control" placeholder="{{ trans('messages.inputEmail') }}" />
				</div>

				<div class="col_one_third col_last">
					<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">{{ trans('messages.subscription') }}</button>
				</div>
			</form>
		</div>


	</div>
@stop

@section('js')
	<script>
	fbq('track', 'Lead', {
		value: 6.00,
		currency: 'TWD'
	});
	</script>
	<!-- Google Code for &#24819;&#35201;&#22577;&#21517; Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 857256812;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "cWkhCIu11XAQ7ObimAM";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/857256812/?label=cWkhCIu11XAQ7ObimAM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>

@stop