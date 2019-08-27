<div class="section notopmargin footer-stick" style="padding: 10px 0; background-color: #F8FAFB; border-top: 1px solid #E5E5E5;">
	<div class="container clearfix">

		<div class="row clearfix">
			@foreach ($items as $item)
				<div class="col-lg-4">
					<div class="app-footer-features"><i class="{{ $item->icon }}"></i><h5 class="font-body"><a href="{{ $item->url }}">{{ $item->title }}</a><span>{{ $item->subtitle }}</span></h5></div>
				</div>
			@endforeach
		</div>

	</div>
</div>