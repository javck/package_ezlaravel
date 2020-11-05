<div class="section dark nobottommargin">
	<div class="container clearfix">

		<div class="row payments-info">
			<div class="col-lg-6">
				<p class="lead nomargin">{!! setting('site.free_ship_plan') !!}</p>
			</div>
			<div class="col-lg-6">
				<ul class="payment-cards clearfix" style="margin-top: 5px;">
					<li><img src="demos/xmas/images/cards/visa.svg" alt="Visa"></li>
					<li><img src="demos/xmas/images/cards/mc.svg" alt="Master Card"></li>
					<li><img src="{{ Voyager::image('images/jcb.png') }}" alt="JCB"></li>
					<li><img src="{{ Voyager::image('images/UnionPay.png') }}" alt="UnionPay"></li>
					<li><img src="{{ Voyager::image('images/ecpay.png') }}" alt="ECPay"></li>
				</ul>
			</div>
		</div>
	</div>
</div>