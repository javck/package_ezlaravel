<input type="number"
       class="form-control"
       name="{{ $row->field }}"
       type="number"
       @if($row->required == 1) required @endif
       step="any"
       placeholder="{{ isset($options->placeholder)? old($row->field, $options->placeholder): $row->display_name }}"
       value="@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@else{{old($row->field)}}@endif"
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
>
