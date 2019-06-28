@if (isset($item_spec3_top) && isset($items_spec3))
<div class="container clear-bottommargin clearfix" style="width: 65%;">
  <div class="center" style="margin-top:5%;">
    <h1>{{ $item_spec3_top->title }}</h1>
  </div>
  <div class="row topmargin-sm clearfix center">
    @foreach ($items_spec3 as $item)
      <div class="col-md-4 bottommargin center">
        <img src="{{ asset('images/'.$item->pic) }}" alt="" style="width:50%;">
        <div class="center heading-block nobottomborder" style="margin-bottom: 15px; padding-right: 5%; padding-left: 5%;">
          <h1>{{ $item->title }}</h1>
          <h4>{{ $item->content }}</h4>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endif

