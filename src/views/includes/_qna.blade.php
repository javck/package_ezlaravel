<div class="container clearfix" >

    <div class="heading-block center">
        <h4>{{trans('page.qna')}}</h4>
    </div>

    <div class="postcontent nobottommargin clearfix">

        <ul id="portfolio-filter" class="portfolio-filter clearfix">
            <li class="activeFilter"><a href="#" data-filter="all">{{trans('page.all')}}</a></li>
            @if (isset($tags))
                @foreach ($tags as $key => $value)
                    <li><a href="#" data-filter=".faq-{{$key}}">{{$value}}</a></li>
                @endforeach
            @endif

        </ul>

        <div class="clear"></div>

        <div id="faqs" class="faqs">

            @if (isset($items_qna))
                @foreach ($items_qna as $element)
                    <div class="toggle faq faq-{{ $element->q_mode }}">
                        <div class="togglet"><i class="toggle-closed {{ $element->icon }}"></i><i class="toggle-open icon-info"></i>{{ $element->title }}</div>
                        <div class="togglec">{!! $element->content !!}</div>
                    </div>
                @endforeach
            @endif


        </div>

    </div>

</div>