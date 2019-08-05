@if(isset($items_slider))

    <section id="slider" class="{{ setting('canvas.slider_class') }}" data-loop="{{ setting('canvas.slider_data_loop') }}">

        <div class="slider-parallax-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    @foreach($items_slider as $slider)
                        <div class="swiper-slide dark" style="background-image: url('{{$slider->getPicUrl()}}');">
                            <div class="container clearfix">
                                <div class="slider-caption 
                                    @if($slider->title_pos == 'center')
                                        slider-caption-center
                                    @endif 
                                    dark">
                                    <h2 data-caption-animate="fadeInUp">{{$slider->title}}</h2>
                                    <p data-caption-animate="fadeInUp"
                                       data-caption-delay="200">{{$slider->subtitle}}</p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
                <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
            </div>

        </div>

    </section>

@endif