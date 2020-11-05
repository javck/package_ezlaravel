@extends('layouts.site')

@section('seo')
@isset($keywords)
<meta name="keywords" content="{{ __('Contact Us') }}">
@endisset
@isset($description)
<meta name="description" content="{{ setting('site.description') }}">
@endisset
@stop

@section('page_title') {{ __('Contact Us') }} @stop

@section('header_class') @stop

@section('body')
<!-- ======= Contact Us Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>{{ __('Contact Us') }}</h2>
            <ol>
                <li><a href="{{ url('/') }}">{{ __('Home Page') }}</a></li>
                <li>{{ __('Contact Us') }}</li>
            </ol>
        </div>

    </div>
</section><!-- End Contact Us Section -->

<!-- ======= Contact Section ======= -->
<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>{{ __('Our Address') }}</h3>
                            <p>{{ setting('site.address') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bx bx-envelope"></i>
                            <h3>{{ __('Our Email') }}</h3>
                            <p><a
                                    href="mailto:{{ setting('site.service_mail') }}">{{ setting('site.service_mail') }}</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bx bx-phone-call"></i>
                            <h3>{{ __('Our Phone') }}</h3>
                            <p><a href="tel:{{ setting('site.phone') }}">{{ setting('site.phone') }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="{{ url('/demo/save') }}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="{{ __('Input Name') }}" data-rule="minlen:2"
                                data-msg="{{ __('Please enter at least 2 chars') }}" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="{{ __('Input Email') }}" data-rule="email"
                                data-msg="{{ __('Please enter a valid email') }}" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            {!! Form::select('service', $services, null, ['class' =>'form-control','placeholder'=>__('Please select what you want...')]) !!}
                        </div>
                        <div class="col-md-6 form-group">
                            {!! Form::select('source', $sources, null, ['class' =>'form-control','placeholder' =>
                            __('Please enter where you know us...')]) !!}
                        </div>

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject"
                            placeholder="{{ __('Subject') }}" data-rule="minlen:4"
                            data-msg="{{ __('Please enter at least 8 chars of subject') }}" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="{{ __('Please write something for us') }}"
                            placeholder="{{ __('Message') }}"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">{{ __('Loading') }}</div>
                        <div class="error-message"></div>
                        <div class="sent-message">{{ __('Your message has been sent. Thank you!') }}</div>
                    </div>
                    <div class="text-center"><button type="submit">{{ __('Send Message') }}</button></div>
                </form>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->

<!-- ======= Map Section ======= -->
<section class="map mt-2">
    <div class="container-fluid p-0">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg"
            frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section><!-- End Map Section -->
@stop
