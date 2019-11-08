@php
    $dataTypeRows = $dataType->{(isset($dataTypeContent->id) ? 'editRows' : 'addRows' )};
@endphp

@foreach($dataTypeRows as $row)
    @if(in_array($row->field, $fields) == $isInclude)
        @php
            $display_options = isset($row->details->display) ? $row->details->display : NULL;
            $visibles = isset($row->details->visibleRoles) ? explode(',',$row->details->visibleRoles) : NULL;
            $inVisibles = isset($row->details->inVisibleRoles) ? explode(',',$row->details->inVisibleRoles) : NULL;
        @endphp
        @if(isset($visibles))
            @if(!in_array(auth()->user()->role->name, $visibles))
                @php
                    continue ;
                @endphp
            @endif
        @elseif(isset($inVisibles))
            @if(in_array(auth()->user()->role->name, $inVisibles))
                @php
                    continue ;
                @endphp
            @endif
        @endif
        @if (isset($row->details->legend) && isset($row->details->legend->text))
            <legend class="text-{{isset($row->details->legend->align) ? $row->details->legend->align : 'center'}}" style="background-color: {{isset($row->details->legend->bgcolor) ? $row->details->legend->bgcolor : '#f0f0f0'}};padding: 5px;">{{$row->details->legend->text}}</legend>
        @endif
        @if (isset($row->details->formfields_custom))
            @include('voyager::formfields.custom.' . $row->details->formfields_custom)
        @else
            <div class="form-group @if($row->type == 'hidden') hidden @endif @if(isset($display_options->width)){{ 'col-md-' . $display_options->width }}@endif" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                {{ $row->slugify }}
                <label for="name" @if($row->required == 1) class="text-danger" @endif>{{ $row->display_name }}</label>
                
                @if(isset($row->details->caption))
                    {!! $row->details->caption !!}
                @endif
                
                @include('voyager::multilingual.input-hidden-bread-edit-add')
                @if($row->type == 'relationship')
                    @include('voyager::formfields.relationship', ['options' => $row->details])
                @else
                    {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                @endif

                @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                    {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                @endforeach
            </div>
        @endif
    @endif
@endforeach