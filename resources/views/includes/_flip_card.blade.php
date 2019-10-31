<div class="heading-block center">
    <h2>{{ $item_top->title }}</h2>
    <span>{{ $item_top->subtitle }}</span>
</div>
<div class="row grid-container" data-layout="masonry" style="overflow: visible">
    @foreach( $items as $item)
        <div class="col-lg-4 mb-4">
            <div class="flip-card text-center top-to-bottom">
            @if($loop->count == 5 && $loop->index ==2)
                <div class="flip-card-front dark" data-height-xl="425" style="background-image: url('/storage/{{ $item->pic }}');">
            @else
                <div class="flip-card-front dark" data-height-xl="200" style="background-image: url('/storage/{{ $item->pic }}');">
            @endif
                    <div class="flip-card-inner">
                        <div class="card nobg noborder text-center">
                            <div class="card-body">
                                <i class="icon-bullhorn2 h1"></i>
                                <h3 class="card-title">{{ $item->title }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @if($loop->count == 5 && $loop->index ==2)
                <div class="flip-card-back bg-info dark" data-height-xl="425">
            @else
                <div class="flip-card-back bg-info dark" data-height-xl="200">
            @endif
                    <div class="flip-card-inner">
                        <p class="mb-2 text-white">{!! $item->content !!}</p>
                        <a href="{{ url($item->url) }}"><button type="button" class="btn btn-outline-light mt-2">{{ $item->url_txt }}</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
