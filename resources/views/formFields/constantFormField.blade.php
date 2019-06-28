@if(!isset($row->details->key))
    <p class="label label-warning"><i class="voyager-warning"></i>請於options內輸入常數的key</p>
@elseif(!isset($options) || (is_array($options) && count($options) == 0))
    <p class="label label-warning"><i class="voyager-warning"></i>常數選項不存在</p>
@endif
<select class="form-control select2" 
    @if(isset($row->details->isMultiple) && $row->details->isMultiple == "true")
        name="{{ $row->field }}[]" multiple>
    @else
        name="{{ $row->field }}">
    @endif    

    @if(isset($options))
        @foreach($options as $key => $option)
            @if(isset($row->details->isMultiple) && $row->details->isMultiple == "true")
                @if($dataTypeContent->{$row->field} != null)
                    <option value="{{ $key }}" @if(in_array($key,$dataTypeContent->{$row->field}))selected="selected" @endif>{{ $option }}</option>
                @else
                    <option value="{{ $key }}">{{ $option }}</option>
                @endif                    
            @else
                <?php 
                    $default = (isset($default) && $dataTypeContent->getOriginal($row->field) == null) ? $default : null;
                ?>
                <option value="{{ $key }}" @if( $key == $default || $key == $dataTypeContent->getOriginal($row->field)) selected="selected" @endif>{{ $option }}</option>
            @endif
            
        @endforeach
    @endif
</select>
