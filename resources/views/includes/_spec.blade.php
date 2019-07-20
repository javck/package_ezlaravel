<div class="container clearfix">

    <div class="heading-block center" data-animate="@if(isset($item_spec_pageTop->animation)){{$item_spec_pageTop->animation}}@endif" data-delay="@if(isset($item_spec_pageTop->animationDelay)){{$item_spec_pageTop->animationDelay}}@endif">
        <h2>{{ $item_spec_pageTop->title }}<span>{{ $item_spec_pageTop->subtitle }}</span></h2>
        <span>{{ $item_spec_pageTop->content }}</span>
    </div>

    @foreach($items_spec as $item )
        <div class="col_one_third nobottommargin @if($loop->last) col_last @endif">
            <div class="feature-box media-box" data-animate="@if(isset( $item->animation )){{ $item->animation }}@endif" data-delay="@if(isset( $item->animationDelay )){{ $item->animationDelay }}@endif">
                <div class="fbox-media">
                    <img src="{{ voyager::image( $item->pic ) }}" alt="{{ $item->alt }}">
                </div>
                <div class="fbox-desc">
                    <h3>{{ $item->title }}<span class="subtitle">{{ $item->subtitle }}</span></h3>
                    <p>{{ $item->content }}</p>
                </div>
            </div>
        </div>
    @endforeach

    <div class="clear"></div>

</div>