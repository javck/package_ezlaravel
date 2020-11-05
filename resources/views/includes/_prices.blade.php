@isset ($item_top)
    <div class="heading-block center" data-animate="@if(isset($item_price_top->animation)){{$item_price_top->animation}}@endif" data-delay="@if(isset($item_price_top->animationDelay)){{$item_price_top->animationDelay}}@endif">
        <h2>{{$item_price_top->title}}</h2>
        <span>{{$item_price_top->subtitle}}</span>
    </div>
@endisset


<div class="container clearfix center">

    <div class="row pricing bottommargin clearfix">

        @foreach($items as $item)
            <div class="col-lg-{{12/$loop->count}} col-md-4" data-animate="@if(isset($item->animation)){{$item->animation}}@endif" data-delay="@if(isset($item->animationDelay)){{$item->animationDelay}}@endif">

                <div class="pricing-box @if($item->isBestPrice) best-price @endif">
                    <div class="pricing-title">
                        <h3>{{$item->title}}</h3>
                        @isset($item->subtitle)
                            <span>{{$item->subtitle}}</span>
                        @endisset
                    </div>
                    <div class="pricing-price">
                        <span class="price-unit">$</span>{{$item->price}}<span class="price-tenure">/{{$item->priceUnit}}</span>
                    </div>
                    <div class="pricing-features">
                        {!! $item->content !!}
                    </div>
                    <div class="pricing-action">
                        <a href="{{ $item->url }}" class="btn btn-danger btn-block btn-lg @if($item->isBestPrice) bgcolor border-color @endif">{{ $item->url_txt }}</a>
                    </div>
                </div>

            </div>

        @endforeach

    </div>

</div>
