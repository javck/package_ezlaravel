<div class="container topmargin">

	<div id="section-faqs" class="page-section nopadding nomargin">

		<h2 class="center font-body bottommargin-lg">常見問題</h2>

		<div class="row topmargin-sm clearfix">

			@foreach ($items as $item)
				<div class="col-lg-5 col-md-6 bottommargin-sm
					@if ($loop->iteration % 2 == 0)
						offset-lg-1
					@endif">
					<h4 class="font-body" style="margin-bottom:15px;">{{ $item->title }}</h4>
					<p>{!! $item->content !!}</p>
				</div>
			@endforeach

		</div>

	</div>

</div>
