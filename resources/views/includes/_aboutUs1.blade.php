@if(isset($item_aboutUs))
    <div class="fancy-title title-border" data-animate="@if(isset($item_aboutUs->animation)){{$item_aboutUs->animation}}@endif" data-delay="@if(isset($item_aboutUs->animationDelay)){{$item_aboutUs->animationDelay}}@endif">
        <h4>{{$item_aboutUs->title}}</h4>
    </div>
    <p>{!! $item_aboutUs->content !!}</p>
@endif