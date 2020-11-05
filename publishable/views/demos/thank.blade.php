@extends('layouts.site')

@section('seo')
@isset($keywords)
<meta name="keywords" content="{{ __('Thank You') }}">
@endisset
@isset($description)
<meta name="description" content="{{ setting('site.description') }}">
@endisset
@stop

@section('page_title'){{ __('Thank You') }}@stop

@section('header_class') @stop

@section('body')

<!-- ======= Thank Section ======= -->
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
</section><!-- End Thank Section -->
@stop
