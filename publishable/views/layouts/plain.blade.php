<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ setting('site.title') }} | {{trans('label.backend')}}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="_token" content="{!! csrf_token() !!}"/>
	<link rel="stylesheet" href="{{ asset("css/vendor.css") }}" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset("css/app-".(Session::has('theme') ? Session::get('theme') : 'green').".css") }}" />
	<link rel="stylesheet" href="{{ asset("css/jquery.dataTables.min.css")}}" />
	<link rel="stylesheet" href="{{ asset("css/select2.min.css")}}" />
	<link rel="stylesheet" href="{{ asset("style_backend.css") }}" />
	<link rel="icon" href="{{asset('images/favicon.png')}}" type="image/png" sizes="16x16">
{{-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css"> --}}
{{-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet"> --}}

<!-- Google Tag Manager -->
{{--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':--}}
{{--new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],--}}
{{--j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=--}}
{{--'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);--}}
{{--})(window,document,'script','dataLayer','GTM-T2BZZG5');</script>--}}
<!-- End Google Tag Manager -->

</head>
<body class="{{ \Session::get('rtl') == 'rtl' ? 'rtl' : '' }}">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2BZZG5"
				  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

{{-- <div class="main-content" id="pjax-container"> --}}
@yield('body')
{{-- </div> --}}
{{--<script src="{{ asset("js/jquery-3.3.1.min.js")}}"></script>--}}
<script src="{{ asset("vendor/ckeditor/ckeditor.js") }}" type="text/javascript"></script>
{{--<script src="{{ asset("js/ckfinder/ckfinder.js") }}" type="text/javascript"></script>--}}
<script src="{{ asset("js/vendor.js")}}"></script>
<script>
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
</script>
@yield('js_global')
@yield('js')
</body>
</html>