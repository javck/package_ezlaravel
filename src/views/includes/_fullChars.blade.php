@isset($items_fullChar)
    <div class="section nobottommargin">
        <div class="container clearfix">

            <div class="section nobottommargin">
                <div class="container clearfix">

                    @foreach($items_fullChar as $item)
                        <div class="col_one_fourth nobottommargin @if($loop->last) col_last  @endif">
                            <div class="feature-box fbox-plain fbox-dark fbox-small">
                                <div class="fbox-icon">
                                    <i class="{{$item->icon}}"></i>
                                </div>
                                <h3>1{{$item->title}}</h3>
                                <p class="notopmargin">{{$item->subtitle}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

@endisset