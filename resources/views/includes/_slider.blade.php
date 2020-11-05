@if(isset($items))

    <section id="slider" class="{{ setting('canvas.slider_class') }}" data-loop="{{ setting('canvas.slider_data_loop') }}">

        <div class="slider-parallax-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    @foreach($items as $item)
                        <div class="swiper-slide dark" style="background-image: url('{{$item->getPicUrl()}}');">
                            <a href="{{ $item->url }}">
                            <div class="container clearfix">
                                <div class="slider-caption
                                    @if($item->title_pos == 'center')
                                        slider-caption-center
                                    @endif
                                    dark">
                                    @if( $item->isShowTitle)
                                        <h2 data-caption-animate="fadeInUp" style="color:{{$item->title_color}}">{{$item->title}}</h2>
                                    @endif
                                    @if( isset($item->subtitle) ) 
                                        <p data-caption-animate="fadeInUp"
                                       data-caption-delay="200" style="color:{{$item->title_color}}">{{$item->subtitle}}</p>
                                    @endif
                                </div>
                            </div>
                            </a>
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
