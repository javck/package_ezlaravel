@extends('layouts.site')

@section('seo')
    @isset($keywords)
        <meta name="keywords" content="{{ __('Home Page') }}">
    @endisset
    @isset($description)
        <meta name="description" content="{{ setting('site.description') }}">
    @endisset
@stop

@section('page_title') {{__('Home Page')}} @stop

@section('header_class') header-transparent @stop

@section('page_top')
    @if ($items_slider != null)
        <section id="hero" class="d-flex justify-cntent-center align-items-center"
            style="background-image: url('{{ url($items_slider[0]->getPicUrl()) }}')">
            <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
                @foreach ($items_slider as $item)
                    <div class="carousel-item @if($loop->first) active  @endif" >
                        <div class="carousel-container">
                            <h2 class="animate__animated animate__fadeInDown">{!! $item->title !!}</h2>
                            <p class="animate__animated animate__fadeInUp">
                                {!! $item->subtitle !!}
                            </p>
                            <a href="{{ $item->url }}" class="btn-get-started animate__animated animate__fadeInUp">{{ $item->url_txt }}</a>
                        </div>
                    </div>
                @endforeach

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">上一頁</span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">下一頁</span>
                </a>

            </div>
        </section>

    @endif

@stop
@section('body')
    <!-- ======= Row1 Section ======= -->
    <section class="services">
        <div class="container">

            <div class="row">
                @foreach ($items_row1 as $item)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-{{ $item->title_color }}">
                            <div class="icon"><i class="bx {{ $item->icon }}"></i></div>
                            <h4 class="title" style="color:{{ $item->title_color }}"><a href="{{ $item->url }}">{!! $item->title !!}</a></h4>
                            <p class="description">{!! $item->content !!}</p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Row2 Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="{{ $item_row2_video->getPicUrl() }}" class="img-fluid" alt="{{ $item_row2_video->alt }}">
                    <a href="{{ $item_row2_video->video }}" class="venobox play-btn mb-4"
                        data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                    @foreach ($items_row2 as $item)
                        <div class="icon-box">
                            <div class="icon"><i class="bx {{ $item->icon }}"></i></div>
                            <h4 class="title"><a href="">{{ $item->title }}</a></h4>
                            <p class="description">{{ $item->content }}</p>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section><!-- End Row2 Section -->

    <!-- ======= Row3 Section ======= -->
    <section class="features">
        <div class="container">

            <div class="section-title">
                <h2>{{ $item_row3_top->title }}</h2>
                <p>{!! $item_row3_top->content !!}</p>
            </div>

            @foreach ($items_row3 as $item)
                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 @if( $loop->iteration % 2 == 1 ) order-1 order-md-2 @endif">
                        <img src="{{ $item->getPicUrl() }}" class="img-fluid" alt="{{ $item->alt }}">
                    </div>
                    <div class="col-md-7 pt-4 @if( $loop->iteration % 2 == 1 ) order-2 order-md-1 @endif">
                        <h3>{{ $item->title }}</h3>
                        {!! $item->content !!}
                    </div>
                </div>
            @endforeach

        </div>
    </section><!-- End Row3 Section -->
@stop
