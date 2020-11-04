<select class="form-control select2" name="{{ $row->field }}[]" multiple>
    @if(isset($options))
    @foreach($options as $key => $option)
    @if($dataTypeContent->{$row->field} != null && is_array($dataTypeContent->{$row->field}))
    <option value="{{ $key }}" @if(in_array($key,$dataTypeContent->{$row->field}))selected="selected"
        @endif>{{ $option }}</option>
    @else
    <option value="{{ $key }}">{{ $option }}</option>
    @endif
    @endforeach
    @endif
</select>
