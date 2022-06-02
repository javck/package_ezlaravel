@if(!isset($row->details->key))
    <p class="label label-warning"><i class="voyager-warning"></i>請於options內輸入常數的key</p>
@elseif(!isset($options) || (is_array($options) && count($options) == 0))
    <p class="label label-warning"><i class="voyager-warning"></i>常數選項不存在</p>
@endif
@if(isset($dataTypeContent->{$row->field}) && !is_null(old($row->field, $dataTypeContent->{$row->field})))
    <?php $selected_value = old($row->field, $dataTypeContent->{$row->field}); ?>
@else
    <?php $selected_value = old($row->field); ?>
@endif
<select class="form-control select2"
    <?php $default = (isset($options->default) && !isset($dataTypeContent->{$row->field})) ? $options->default : null; ?>
    @if(isset($row->details->isMultiple) && $row->details->isMultiple == true)
        name="{{ $row->field }}[]" multiple>
    @else
        name="{{ $row->field }}">
    @endif

    @if(isset($options))
        @foreach($options as $key => $option)
            @if(isset($row->details->isMultiple) && $row->details->isMultiple == true)
            @php
                $values = json_decode($dataTypeContent->{$row->field},true)
            @endphp
                @if($dataTypeContent->{$row->field} != null && is_array($values))
                    <option value="{{ $key }}" @if(in_array($key,$values))selected="selected" @endif>{{ $option }}</option>
                @else
                    <option value="{{ $key }}">{{ $option }}</option>
                @endif
            @else
                <?php $default = (isset($options->default) && !isset($dataTypeContent->{$row->field})) ? $options->default : null; ?>
                <option value="{{ $key }}" @if($default==$key &&
                    $selected_value===NULL){{ 'selected="selected"' }}@endif
                    @if((string)$selected_value==(string)$key){{ 'selected="selected"' }}@endif>{{ $option }}</option>
            @endif

        @endforeach
    @endif
</select>
