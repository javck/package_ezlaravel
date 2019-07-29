<div data-animate="@if(isset($item->animation)){{$item->animation}}@endif"
     data-delay="@if(isset($item->animationDelay)){{$item->animationDelay}}@endif">
    <div class="fancy-title title-border title-center topmargin-sm">
        <h4>{{$item_partner_pageTop->title}}</h4>
    </div>

    <ul class="clients-grid grid-6 nobottommargin clearfix">
        @foreach($items_partner as $item)
            <li><a href="{{$item->url}}"><img src="{{ Voyager::image($item->pic) }}" alt="{{$item->alt}}"></a></li>
        @endforeach
    </ul>
</div>