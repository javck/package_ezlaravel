<textarea class="form-control richTextBox" name="{{ $row->field }}" id="richtext{{ $row->field }}"
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
    @if(isset($dataTypeContent->{$row->field}))
        {{ old($row->field, $dataTypeContent->{$row->field}) }}
    @else
        {{old($row->field)}}
    @endif
</textarea>
