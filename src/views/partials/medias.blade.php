<!-- 媒體 Filter
============================================= -->
@if ( isset($tags) and count($tags)>0 )
	<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

		<li class="activeFilter"><a href="#" data-filter="*">{{ trans('page.showAll') }}</a></li>
		@foreach ($tags as $tag)
			<li><a href="#" data-filter=".pf-{{ $tag->id }}">{{ $tag->title }}</a></li>
		@endforeach

	</ul><!-- #媒體-filter end -->
@endif
<div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
	<i class="icon-random"></i>
</div>

<div class="clear"></div>

<!-- 媒體 Items
============================================= -->
<div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">
@if ( isset($medias) and count($medias)>0 )
	@foreach ($medias as $element)
	
		<article class="portfolio-item {{ $element->getTagString() }}">
			<div class="portfolio-image">
				@if ($element->l_type == 'gallery-item')
					<div class="fslider" data-arrows="false" data-speed="400" data-pause="{{$element->getWaitTime()}}">
						<div class="flexslider">
							<div class="slider-wrap">
								@for ($i = 0; $i < $element->getPicsCount() ; $i++)
									<div class="slide"><img src="{{ Voyager::image($element->getPicByIndex($i)) }}" /></div>
								@endfor
							</div>
						</div>
					</div>
					<div class="portfolio-overlay" data-lightbox="gallery">
						<a href="{{asset('images/'.$element->getLinkByIndex(0))}}" class="left-icon" data-lightbox="gallery-item"><i class="{{ $element->l_icon }}"></i></a>
						@for ($i = 1; $i < $element->getPicsCount() ; $i++)
							<a href="{{asset('images/'.$element->getLinkByIndex($i))}}" class="hidden" data-lightbox="gallery-item"></a>
						@endfor
				@elseif ($element->l_type == 'image')
					<img src="{{ Voyager::image($element->getPicByIndex(0)) }}" />
					<div class="portfolio-overlay">
						<a href="{{$element->l_link}}" class="left-icon" data-lightbox="image"><i class="{{$element->l_icon}}"></i></a>	
				@elseif ($element->l_type == 'video')
					<img src="{{ Voyager::image($element->getPicByIndex(0)) }}" />
					<div class="portfolio-overlay">
						<a href="{{$element->l_link}}" class="left-icon" data-lightbox="iframe"><i class="{{$element->l_icon}}"></i></a>
				@elseif ($element->l_type == 'web')
					<img src="{{ Voyager::image($element->getPicByIndex(0)) }}" />
					<div class="portfolio-overlay">
						<a href="{{$element->l_link}}" class="left-icon"><i class="{{$element->l_icon}}"></i></a>	
				@endif
					@if (isset($element->r_link) && strlen($element->r_link) > 0)
						<a href="{{ $element->r_link }}" class="right-icon" {!! $element->r_type=="video"?'data-lightbox="iframe"':'' !!}><i class="{{ $element->r_icon }}"></i></a>
					@endif
					</div>
			</div>
			<div class="portfolio-desc"><!-- 描述區塊  -->
				<h3><a href="{{ $element->title_link == null ? '#' : $element->title_link }}">{{$element->title}}</a></h3>
				<span>{!! $element->getTagHtmlString() !!}</span>
			</div>
		</article>
	@endforeach
@endif
</div><!-- #媒體 end -->