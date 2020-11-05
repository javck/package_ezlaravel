@foreach($items as $menu_item)
<div class="col-lg-{{ 6/$loop->count }} col-md-{{ 12/$loop->count }} footer-links">
    @php
    $sub2menu = $menu_item->children;
    @endphp

    @if(isset($sub2menu) && count($sub2menu) > 0)
        <h4>{!! $menu_item->title !!}</h4>
        <ul>
        @foreach($sub2menu as $sub2_item)
            <li><a href="{{$sub2_item->link()}}">{{$sub2_item->title}} </a></li>
        @endforeach
        </ul>
    @else
        <a href="{{$menu_item->link()}}">{{$menu_item->title}} </a>
    @endif
</div>
@endforeach
