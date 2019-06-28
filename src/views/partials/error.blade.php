@if (count($errors))
	@foreach($errors->all() as $error)
		<div class="alert alert-warning  alert-dismissable " role="alert">
	 		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  {{ $error }}
		</div>
    @endforeach
@endif