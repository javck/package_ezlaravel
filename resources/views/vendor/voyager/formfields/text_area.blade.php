<textarea @if($row->required == 1) required @endif class="form-control" name="{{ $row->field }}" rows="{{ isset($options->display->rows) ? $options->display->rows : 5 }}"
@php
	$disabled = false;
    if(isset($options->disabledCreate)){
    	if( !isset($dataTypeContent->id) ){
    		$disabled = true;
    	}
    }elseif(isset($options->disabledEdit)){
    	if( isset($dataTypeContent->id) ){
    		$disabled = true;
    	}
    }
@endphp       
@if($disabled) disabled @endif
>@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@elseif(isset($options->default)){{ old($row->field, $options->default) }}@else{{ old($row->field) }}@endif</textarea>
