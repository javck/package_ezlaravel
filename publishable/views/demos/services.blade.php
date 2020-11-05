@extends('layouts.site')

@section('seo')
@isset($keywords)
<meta name="keywords" content="{{ __('Our Services')}}">
@endisset
@isset($description)
<meta name="description" content="{{ setting('site.description') }}">
@endisset
@stop

@section('page_title'){{ __('Our Services')}} @stop

@section('header_class') @stop

@section('body')
<!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{ __('Our Services')}}</h2>
          <ol>
            <li><a href="{{ url('/') }}">{{ __('Home Page') }}</a></li>
            <li>{{ __('Our Services') }}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

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

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">
          @foreach($items_row3 as $item) 
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ $item->getPicUrl() }}" alt="{{ $item->alt }}">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">{{ $item->title }}</a></h5>
                <p class="card-text">{!! $item->content !!}</p>
                <div class="read-more"><a href="{{ $item->url }}"><i class="icofont-arrow-right"></i> {{__('Read More')}}</a></div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Service Details Section -->

    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>{{ $item_price_top->title }}</h2>
          <p>{!! $item_price_top->content !!}</p>
        </div>

        <div class="row no-gutters">
          @foreach($items_prices as $item)
            <div class="col-lg-4 box">
                <h3>{{ $item->title }}</h3>
                <h4>${{ $item->price }}<span>{{ $item->priceUnit }}</span></h4>
                {!! $item->content !!}
                <a href="{{ $item->url }}" class="get-started-btn">{{ __('Get Start') }}</a>
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Pricing Section -->
@stop
