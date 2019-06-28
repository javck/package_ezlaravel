<div class="heading-block center" data-animate="@if(isset($item_features_pageTop->animation)){{$item_features_pageTop->animation}}@endif" data-delay="@if(isset($item_features_pageTop->animationDelay)){{$item_features_pageTop->animationDelay}}@endif">
    <h2>{{$item_features_pageTop->title}}</h2>
    <span>{{$item_features_pageTop->subtitle}}</span>
</div>

<div class="container clearfix">

    @foreach($items_features as $item)
        <div class="col_one_third @if($loop->index % 2 == 0) col_last @endif">
            <div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="@if(isset($item->animation)){{$item->animation}}@endif" data-delay="@if(isset($item->animationDelay)){{$item->animationDelay}}@endif">
                <div class="fbox-icon">
                    <a href="#"><i class="{{$item->icon}}"></i></a>
                </div>
                <h3>{{$item->title}}</h3>
                <p>{{$item->subtitle}}</p>
            </div>
        </div>
    @endforeach

    <div class="clear"></div>