<div class="card card-{{{ isset($class) ? $class : 'default' }}}">
	@if( isset($header))  
	<div class="card-header">
		@yield ($as . '_panel_title')
		@if( isset($controls))  
		<div class="panel-control pull-right hidden">
			<a class="panelButton"><i class="fa fa-refresh"></i></a>
			<a class="panelButton"><i class="fa fa-minus"></i></a>
			<a class="panelButton"><i class="fa fa-remove"></i></a>
		</div>
		@endif
	</div>
	@endif

	<div class="card-block">
		@yield ($as . '_panel_body')
	</div>
	
	@if( isset($footer))
		<div class="card-footer">@yield ($as . '_panel_footer')</div>
	@endif
</div>