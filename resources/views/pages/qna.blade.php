@extends('layouts.site')
@section('seo')
	@parent
	@isset($keywords)
	    <meta name="keywords" content="{{ $keywords }}">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ $description }}">
	@endisset
@stop
@section('page_title') {{ trans('page.qna') }} @stop

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
	
	<!-- Post Content
	============================================= -->
	<div class="container clearfix">
		<div class="postcontent nobottommargin clearfix">

			<ul id="portfolio-filter" class="portfolio-filter clearfix customjs">
				<!-- 標籤列 -->
				<li class="activeFilter"><a href="#" data-filter="all">全部</a></li>
				@if (isset($tags))
					@foreach ($tags as $key => $value)
						<li><a href="#" data-filter=".faq-{{$key}}">{{$value}}</a></li>
					@endforeach
				@endif
			</ul>

			<div class="clear"></div>
			<!-- 說明內容 -->
			<div id="faqs" class="faqs">
				@if (isset($items))
					@foreach ($items as $element)
						<div class="toggle faq faq-{{ $element->q_mode }}">
							<div class="togglet"><i class="toggle-closed {{ $element->icon }}"></i><i class="toggle-open {{ $element->icon }}"></i>{{ $element->title }}</div>
							<div class="togglec">{!! $element->content !!}</div>
						</div>
					@endforeach
				@endif	
			</div>
		</div><!-- .postcontent end -->
	</div>
@stop

@section('js')
	<script>
		jQuery(document).ready(function($){
			var $faqItems = $('#faqs .faq');
			if( window.location.hash != '' ) {
				var getFaqFilterHash = window.location.hash;
				var hashFaqFilter = getFaqFilterHash.split('#');
				if( $faqItems.hasClass( hashFaqFilter[1] ) ) {
					$('#portfolio-filter li').removeClass('activeFilter');
					$( '[data-filter=".'+ hashFaqFilter[1] +'"]' ).parent('li').addClass('activeFilter');
					var hashFaqSelector = '.' + hashFaqFilter[1];
					$faqItems.css('display', 'none');
					if( hashFaqSelector != 'all' ) {
						$( hashFaqSelector ).fadeIn(500);
					} else {
						$faqItems.fadeIn(500);
					}
				}
			}

			$('#portfolio-filter a').on( 'click', function(){
				$('#portfolio-filter li').removeClass('activeFilter');
				$(this).parent('li').addClass('activeFilter');
				var faqSelector = $(this).attr('data-filter');
				$faqItems.css('display', 'none');
				if( faqSelector != 'all' ) {
					$( faqSelector ).fadeIn(500);
				} else {
					$faqItems.fadeIn(500);
				}
				return false;
		   });
		});
	</script>
@stop




