<div class="container clearfix">

    <div class="col_half nobottommargin">&nbsp;</div>

    <div class="col_half nobottommargin col_last">

        <div class="heading-block center" data-animate="@if(isset($item_custEval_pageTop->animation)){{$item_custEval_pageTop->animation}}@endif" data-delay="@if(isset($item_custEval_pageTop->animationDelay)){{$item_custEval_pageTop->animationDelay}}@endif">
            <h4>{{$item_custEval_pageTop->title}}</h4>
            <span>{{$item_custEval_pageTop->subtitle}}</span>
        </div>

        <div class="fslider testimonial testimonial-full nobgcolor noborder noshadow nopadding" data-arrows="false">
            <div class="flexslider">
                <div class="slider-wrap">
                    @foreach($items_custEval as $item)
                        <div class="slide">
                            <div class="testi-content">
                                <p>{{$item->content}}</p>
                                <div class="testi-meta">
                                    {{$item->title}}
                                    <span>{{$item->subtitle}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

</div>