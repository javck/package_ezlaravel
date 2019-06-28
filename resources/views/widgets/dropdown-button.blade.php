<div class="dropdown btn-group @if (isset($up)) dropup @endif">
	@if (isset($split)) 
		<button type="button" class="btn btn-{{{ isset($class) ? $class : 'secondary' }}} {{{ isset($rounded) ? 'btn-rounded' : ''}}} {{{ isset($bordered) ? 'btn-bordered' : ''}}} @if (isset($size)) btn-{{$size}} @endif  {{{ isset($disabled) ? 'disabled' : '' }}} left">{{ $value }}</button>
		<button type="button" class="btn btn-{{{ isset($class) ? $class : 'secondary' }}} {{{ isset($rounded) ? 'btn-rounded' : ''}}} {{{ isset($bordered) ? 'btn-bordered' : ''}}} dropdown-toggle right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only"></span>
		</button> 
	@else
		<button type="button" class="btn btn-{{{ isset($class) ? $class : 'secondary' }}} {{{ isset($rounded) ? 'btn-rounded' : ''}}} {{{ isset($bordered) ? 'btn-bordered' : ''}}} @if (isset($size)) btn-{{$size}} @endif  {{{ isset($disabled) ? 'disabled' : '' }}} dropdown-toggle right-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $value }}
			<span class="caret"></span>
		</button>
	@endif

	<div class="dropdown-menu" role="menu">
		@if (isset($submenu))
			@foreach ($submenu as $menu)
				<a class="dropdown-item" href="{{ $menu['link'] }}"> {{ $menu['name']  }}</a>
			@endforeach
		@endif
	</div>
</div>