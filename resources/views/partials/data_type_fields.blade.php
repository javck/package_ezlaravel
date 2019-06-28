@php
    $dataTypeRows = $dataType->{(isset($dataTypeContent->id) ? 'editRows' : 'addRows' )};
@endphp

@foreach($dataTypeRows as $row)
    @if(in_array($row->field, $fields) == $isInclude)
        @php
            $display_options = isset($row->details->display) ? $row->details->display : NULL;
        @endphp
        @if (isset($row->details->formfields_custom))
            @include('voyager::formfields.custom.' . $row->details->formfields_custom)
        @else
            <div class="form-group @if($row->type == 'hidden') hidden @endif @if(isset($display_options->width)){{ 'col-md-' . $display_options->width }}@endif" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                {{ $row->slugify }}
                <label for="name">{{ $row->display_name }}</label>
                
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