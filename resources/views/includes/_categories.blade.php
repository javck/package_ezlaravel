<div class="container clearfix topmargin">
	<div class="heading-block nobottomborder center">
		<h3>{{$item_top->title}}</h3>
		<span>{{$item_top->subtitle}}</span>
	</div>
	<div class="row ecommerce-categories clearfix" style="padding: 20px 0 0;">
		@foreach ($items as $item)
			<div class="col-lg-4">
				<a href="{{ url('/shop/cgy/'.$item->id) }}" style="background: url({{ Voyager::image($item->pic) }}) no-repeat center center; background-size: cover;" class="d-flex">
				<div class="d-flex align-items-center w-100 dark center">
					<div class="heading-block nomargin noborder w-100">
						<h3 class="capitalize font-secondary nott t500">{{ $item->title }}<span>{{ $item->desc }}</span></h3>
					</div>
				</div>
				</a>
			</div>
		@endforeach	
	</div>
</div>