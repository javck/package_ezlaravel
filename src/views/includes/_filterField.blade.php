<div class="row ca-d-flex ca-content-right ca-content-space-around ca-row-m-0" style="width:100%">
	@foreach ($fields as $field)
		<div class="col-md-4 ca-col col-sm-12">
			<div class="ca-col ca-col-p-0 ca-d-flex ca-content-right">
				{{ Form::label($field['key'],$field['label'],['style'=>'margin-top: auto; margin-bottom: auto;']) }}	
			</div>		
			<div class="ca-col ca-col-p-0">
				<div class="input-group">
					{{ Form::select($field['key'],$field['options'],Session::get($field['key'],null),['style'=>'width:100%']) }}&nbsp;				
				</div>
			</div>
		</div>
	@endforeach
</div>