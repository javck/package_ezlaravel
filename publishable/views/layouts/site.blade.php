<!DOCTYPE html>
<html dir="ltr" lang="zh-TW">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="goblinLab" />
		<meta name="description" content="{{ setting('site.description') }}" />
		@yield('seo')
		<!-- Stylesheets
		============================================= -->
		<link rel="stylesheet" href="{{asset('css/all.css')}}" type="text/css" />

		<!-- 如只需改顏色，可修改此檔案  -->
		<link rel="stylesheet" href="{{asset('css/colors.css')}}" type="text/css" />

		<!-- 如需改樣式表，可修改此檔案  -->
		<link rel="stylesheet" href="{{asset('css/style-vars.css')}}" type="text/css" />
		<!-- 自定義樣式，可修改此檔案  -->
		<link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />

		@yield('css')
		<link rel="icon" href="{{Voyager::image(setting('site.favicon'))}}" type="image/png" sizes="16x16">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:title" content="{{ setting('site.title') }}" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="{{URL::to('/')}}" />
		<meta property="og:image" content="{{ setting('site.image') }}" />
		<meta property="og:description" content="{{ setting('site.description') }}" />

	<!-- Document Title
	============================================= -->
		
		<title> @yield('page_title') | {{ setting('site.title') }} </title>

	</head>
	<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		{{-- @include('partials.topBar') --}}

		<!-- Header
		============================================= -->

		<header id="header" class="{{ setting('canvas.header_class') }}" @if(setting('canvas.header_sticky_class')!="none")data-sticky-class="{{ setting('canvas.header_sticky_class') }}"@endif @if(setting('canvas.header_responsive_class')!="none")data-responsive-class="{{ setting('canvas.header_responsive_class') }}"@endif>

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="{{url('/')}}" class="standard-logo" data-dark-logo="{{ Voyager::image(setting('site.logo'),'storage/images/logo.png')
 }}"><img src="{{Voyager::image(setting('site.logo'),'storage/images/logo.png')}}" alt="{{ setting('site.title') }}"/></a>
						<a href="{{url('/')}}" class="retina-logo" data-dark-logo="{{ asset('storage/images/logo@2x.png') }}"><img src="{{Voyager::image(setting('site.logo@2x'),'storage/images/logo@2x.png')}}" alt="{{ setting('site.title') }}"/></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
                        ============================================= -->
					@yield('pri_nav')
				</div>
			</div>
		</header><!-- #header end -->

		<div class="clear"></div>

		@yield('page_top')


		<!-- Content
		============================================= -->

		<section id="content">
			<div class="content-wrap">
				@yield('body')
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		@include('easyweb2::includes._simpleFooter')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('js/all.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
    {!! NoCaptcha::renderJs() !!}
	{{-- <script>
		//$('#top-cart').load("{{url('api/page/loadTopCart')}}");
	</script> --}}
	@yield('js')
</body>
</html>