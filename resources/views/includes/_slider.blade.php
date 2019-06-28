@if(isset($items_slider))

    {{--<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix" data-autoplay="5000" data-loop="true">--}}
        {{--<div class="swiper-container">--}}
            {{--<div class="swiper-wrapper">--}}
                {{--@foreach($items_slider as $slider)--}}
                    {{--<div class="swiper-slide dark" style="background-image: url('images/{{$slider->pic}}');">--}}
                        {{--<div class="container clearfix">--}}
                            {{--<div class="slider-caption slider-caption-center">--}}
                                {{--<h2 data-caption-animate="fadeInUp">{{$slider->title}}</h2>--}}
                                {{--<p data-caption-animate="fadeInUp"--}}
                                   {{--data-caption-delay="200">{{$slider->subtitle}}</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--@endforeach--}}

            {{--</div>--}}
            {{--<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>--}}
            {{--<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>--}}
            {{--<div id="slide-number">--}}
                {{--<div id="slide-number-current"></div>--}}
                {{--<span>/</span>--}}
                {{--<div id="slide-number-total"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section id="slider" class="{{ setting('canvas.slider_class') }}" data-loop="{{ setting('canvas.slider_data_loop') }}">

        <div class="slider-parallax-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    @foreach($items_slider as $slider)
                        <div class="swiper-slide dark" style="background-image: url('{{$slider->getPicUrl()}}');">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center dark">
                                    <h2 data-caption-animate="fadeInUp">{{$slider->title}}</h2>
                                    <p data-caption-animate="fadeInUp"
                                       data-caption-delay="200">{{$slider->subtitle}}</p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
                <div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
            </div>

        </div>

    </section>

    {{--<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">--}}

        {{--<div class="slider-parallax-inner">--}}

            {{--<div class="swiper-container swiper-parent">--}}
                {{--<div class="swiper-wrapper">--}}
                    {{----}}
                {{--</div>--}}
                {{--<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>--}}
                {{--<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>--}}
                {{--<div id="slide-number">--}}
                    {{--<div id="slide-number-current"></div>--}}
                    {{--<span>/</span>--}}
                    {{--<div id="slide-number-total"></div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}

    {{--</section>--}}

@endif