<div class="container clearfix">

	@isset ($item_top)
        <div class="heading-block center" data-animate="@if(isset($item_prices_pageTop->animation)){{$item_prices_pageTop->animation}}@endif" data-delay="@if(isset($item_prices_pageTop->animationDelay)){{$item_prices_pageTop->animationDelay}}@endif">
            <h2>{{$item_prices_pageTop->title}}</h2>
            <span>{{$item_prices_pageTop->subtitle}}</span>
        </div>
    @endisset

	<div id="section-pricing" class="page-section nopadding nomargin">

		<div id="pricing-switch" class="pricing row bottommargin-lg clearfix">

			@foreach ($items as $item)
				<div class="col-lg-4 col-md-6">
					<div class="pricing-box">
						<div class="pricing-title">
							<h3>{{ $item->title }}</h3>
						</div>
						<div class="pricing-price">
							<div class="pts-switch-content-left"><span class="price-unit">&dollar;</span>{{ $item->price }}<span class="price-tenure">{{ $item->subtitle }}</span></div>
						</div>
						<div class="pricing-features">
							{!! $item->content !!}
						</div>
						<div class="pricing-action">
							<a href="{{ $item->url }}" data-lightbox="inline" data-pricing-plan="Starter Plan" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">{{ $item->url_txt }}</a>
						</div>
					</div>

				</div>
			@endforeach

		</div>

	</div>
</div>
