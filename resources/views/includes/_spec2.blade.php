@if (isset($item_spec2_top) && isset($items_spec2))
    <div class="section nobottommargin">
        <div class="container clear-bottommargin clearfix" style="width: 65%;">
            <div class="heading-block center">
              <h1>{!! $item_spec2_top->title !!}</h1>
            </div>
            <div class="row topmargin-sm clearfix">
                @foreach ($items_spec2 as $item)
                    <div class="col-md-4 bottommargin center">
                        <img src="images/{{ $item->pic }}" alt="{{ $item->alt }}" style="width:50%;" />
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h4>{{ $item->title }}</h4>
                        </div>
                        <p>{!! $item->content !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif

