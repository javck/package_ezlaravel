<!-- =======================================================
  * 此Bootstrap版面取自於 Moderna Bootstrap Template
  * Template Name: Moderna - v2.1.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Template Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="goblinLab" />
    <meta name="description" content="{{ setting('site.description') }}" />
    @yield('seo')
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('page_title') | {{ setting('site.title') }}</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{Voyager::image(setting('site.favicon'))}}" rel="icon">
    {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('css')

    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{URL::to('/')}}" />
    <meta property="og:image" content="{{ setting('site.image') }}" />
    <meta property="og:description" content="{{ setting('site.description') }}" />

    @if(env('APP_ENV') == 'production')
    {!! setting('site.gtm_head') !!}
    @endif
</head>

<body>
    @if(env('APP_ENV') == 'production')
    {!! setting('site.gtm_body') !!}
    @endif
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top @yield('header_class')">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="{{ url('/') }}"><span>{{ setting('site.title') }}</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="{{ url('/') }}"><img src="{{ Voyager::image(setting('site.logo'),'storage/images/logo.png')
 }}" alt="{{ setting('site.title') }}" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                {{ menu('frontend','partials.priNav_classic') }}
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @yield('page_top')

    <!-- End Hero -->

    <main id="main">

        @yield('body')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <!-- 訂閱電子報區塊開始
            <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
            </div>
            訂閱電子報區塊結束-->

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    {{ menu('frontend_footer','partials.menu_footer') }}

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>聯絡資訊</h4>
                        <p>
                            {!! setting('site.address') !!}<br>
                            <strong>電話:</strong> {{ setting('site.phone') }}<br>
                            <strong>Email:</strong> <a
                                href="mailto:{{ setting('site.service_mail') }}">{{ setting('site.service_mail') }}</a><br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>關於我們</h3>
                        <p>{!! setting('site.description') !!}</p>
                        <div class="social-links mt-3">
                            <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->
                            @if (setting('site.fb_id') != null)
                            <a href="https://www.facebook.com/{{ setting('site.fb_id') }}" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            @endif
                            @if (setting('site.ig_id') != null)
                            <a href="https://www.instagram.com/{{ setting('site.ig_id') }}/" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            @endif

                            <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="container">
            <div class="copyright">
                {!! setting('site.copyright') !!}
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('js')
    {!! setting('site.javascript_embedded') !!}
</body>

</html>
