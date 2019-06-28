<a href="{{$link}}" class="stat hvr-wobble-horizontal">
	<div class=" stat-icon">
		<i class="fa fa-{{ $icon }} fa-4x text-{{ $bgclass }} "></i><br>
		<p class="text-center">{{ $title }}</p>
	</div>
	<div class=" stat-label">
		<div class="label-header">
			{{ $value }}% <small>( {{$lb_value}} )</small>
		</div>
		<progress class="progress progress-sm progress-{{ $bgclass }}" value="{{ $value }}" max="100">{{ $value }}%</progress>
		<div class="clearfix stat-detail">	
			<div class="label-body">
				<i class="fa fa-arrow-circle-o-right pull-right text-muted"></i>{{ $text }}
			</div>
		</div>
	</div>
</a>