@extends('layouts.site')

@section('seo')
@isset($keywords)
<meta name="keywords" content="{{ __('About Us') }}">
@endisset
@isset($description)
<meta name="description" content="{{ setting('site.description') }}">
@endisset
@stop

@section('page_title'){{ __('About Us') }}@stop

@section('header_class') @stop

@section('body')
<!-- ======= About Us Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>{{ __('About Us') }}</h2>
            <ol>
                <li><a href="{{ url('/') }}">{{ __('Home Page') }}</a></li>
                <li>{{ __('About Us') }}</li>
            </ol>
        </div>

    </div>
</section><!-- End About Us Section -->

<!-- ======= About Section ======= -->
<section class="about" data-aos="fade-up">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <img src="{{ $item_row1->getPicUrl() }}" class="img-fluid" alt="{{ $item_row1->alt }}">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <h3>{{ $item_row1->title }}</h3>
                {!! $item_row1->content !!}
            </div>
        </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Facts Section ======= -->
<section class="facts section-bg" data-aos="fade-up">
    <div class="container">

        <div class="row counters">

            @foreach ($items_row2 as $item)
                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">{{ $item->subtitle }}</span>
                    <p>{{ $item->title }}</p>
                </div>
            @endforeach

        </div>

    </div>
</section><!-- End Facts Section -->

<!-- ======= Our Skills Section ======= -->
<section class="skills" data-aos="fade-up">
    <div class="container">

        <div class="section-title">
            <h2>{{ $item_row3_top->title }}</h2>
            <p>{!! $item_row3_top->content !!}</p>
        </div>

        <div class="skills-content">

            @foreach ($items_row3 as $item)
                <div class="progress">
                    @php
                        if($item->subtitle > 70){
                            $color = 'bg-danger';
                        }else if($item->subtitle >= 60){
                            $color = 'bg-warning';
                        }else if($item->subtitle >= 40){
                            $color = 'bg-info';
                        }else{
                            $color = 'bg-success';
                        }
                    @endphp
                    <div class="progress-bar {{ $color }}" role="progressbar" aria-valuenow="{{ $item->subtitle }}"
                        aria-valuemin="0"
                        aria-valuemax="100">
                        <span class="skill">{{ $item->title }} <i class="val">{{ $item->subtitle }}%</i></span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section><!-- End Our Skills Section -->

<!-- ======= Tetstimonials Section ======= -->
<section class="testimonials" data-aos="fade-up">
    <div class="container">

        <div class="section-title">
            <h2>{{ $item_row4_top->title }}</h2>
            <p>{!! $item_row4_top->content !!}</p>
        </div>

        <div class="owl-carousel testimonials-carousel">

            @foreach ($items_row4 as $item)
                <div class="testimonial-item">
                    <img src="{{ $item->getPicUrl() }}" class="testimonial-img" alt="">
                    <h3>{{ $item->title }}</h3>
                    <h4>{{ $item->subtitle }}</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {!! $item->content!!}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>
            @endforeach

        </div>

    </div>
</section><!-- End Ttstimonials Section -->
@stop
