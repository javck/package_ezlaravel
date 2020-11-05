@extends('layouts.site')

@section('seo')
@isset($keywords)
<meta name="keywords" content="{{ __('Portfolio') }}">
@endisset
@isset($description)
<meta name="description" content="{{ setting('site.description') }}">
@endisset
@stop

@section('page_title'){{ __('Portfolio') }}@stop

@section('header_class') @stop

@section('body')
<!-- ======= Portfolio Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>{{ __('Portfolio') }}</h2>
            <ol>
                <li><a href="{{ url('/') }}">{{ __('Home Page') }}</a></li>
                <li>{{ __('Portfolio') }}</li>
            </ol>
        </div>

    </div>
</section><!-- End Portfolio Section -->

<!-- ======= Portfolio Section ======= -->
<section class="portfolio">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                @if ( isset($tags) and count($tags)>0 )
                <ul id="portfolio-flters">
                    <li class="filter-active" data-filter="*">{{ trans('page.showAll') }}</li>
                    @foreach ($tags as $tag)
                    <li data-filter=".filter-{{ $tag->id }}">{{ $tag->title }}</li>
                    @endforeach

                </ul><!-- #媒體-filter end -->
                @endif
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            @if ( isset($medias) and count($medias)>0 )
                @foreach ($medias as $media)
                    <div class="col-lg-4 col-md-6 {{ $media->getTagString() }}">
                        <div class="portfolio-item">
                            <img src="{{ $media->getFirstPic() }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3><a href="{{ $media->url }}"
                                        data-gall="portfolioGallery" class="venobox"
                                        title="{{ $media->title }}">{{ $media->title }}</a></h3>
                                <div>
                                    <a href="{{ $media->getFirstPic() }}" data-gall="portfolioGallery" class="venobox"
                                        title="{{ $media->title }}"><i class="bx bx-plus"></i></a>
                                    <a href="{{ url('/demo/portfolio/'.$media->id) }}" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
</section><!-- End Portfolio Section -->
@stop
