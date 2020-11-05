@extends('layouts.site')

@section('seo')
@isset($keywords)
<meta name="keywords" content="{{ $media->title }}">
@endisset
@isset($description)
<meta name="description" content="{{ setting('site.description') }}">
@endisset
@stop

@section('page_title'){{ $media->title }}@stop

@section('header_class') @stop

@section('body')
<!-- ======= Portfolio Detail Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>{{ $media->title }}</h2>
            <ol>
                <li><a href="{{ url('/') }}">{{ __('Home Page') }}</a></li>
                <li>{{ $media->title }}</li>
            </ol>
        </div>

    </div>
</section><!-- End Portfolio Detail Section -->

<!-- ======= Portfolio Details Section ======= -->
<section class="portfolio-details">
    <div class="container">

        <div class="portfolio-details-container">

            <div class="owl-carousel portfolio-details-carousel">
                @foreach ($media->getPicsArray() as $pic)
                    <img src="{{ $pic }}" class="img-fluid" alt="">
                @endforeach
            </div>

            <div class="portfolio-info">
                <h3>{{ $media->detail_title }}</h3>
                <ul>
                    <li><strong>{{ __('Category') }}</strong>: {{ $media->cgyName }}</li>
                    <li><strong>{{ __('Client') }}</strong>: {{ $media->client }}</li>
                    <li><strong>{{ __('Project Date') }}</strong>:
                        {{ date('Y/m/d', strtotime($media->project_date)) }}
                    </li>
                    <li><strong>{{ __('Project URL') }}</strong>: <a href="{{ $media->url }}">{{ $media->url }}</a></li>
                </ul>
            </div>

        </div>

        <div class="portfolio-description">
            <h2>{{ $media->detail_title }}</h2>
            <p>
                {!! $media->content !!}
            </p>
        </div>
    </div>
</section><!-- End Portfolio Details Section -->

@stop
