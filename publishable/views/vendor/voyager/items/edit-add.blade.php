@extends('layouts.edit-add-master')

@section('panel_top')
    @if(isset($dataTypeContent))
{{--         <a class="btn btn-info btn-rounded" href="{{ url('/admin/items/copy/' . $dataTypeContent->id ) }}">{{ trans('label.copy_'.$dataType->slug) }} </a> --}}
        <a class="btn btn-danger btn-rounded" href="{{ url('/admin/items/del/' . $dataTypeContent->id ) }}">{{ trans('label.delete_'.$dataType->slug) }} </a>
    @endif
    <a class="btn btn-success btn-rounded" href="{{ url('/admin/'.$dataType->slug) }}">{{ trans('label.back_'.$dataType->slug) }} </a>
@stop


@section('panel_l_1_title')
    <i class="voyager-character"></i> {{ __('generic.basic_field') }}
    {{-- <span class="panel-desc"> {{ __('voyager::post.title_sub') }}</span> --}}
@stop

@section('panel_l_1_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['title','pics','badge','star','sku'] ])
@stop

@section('panel_l_2_title')
    {{ __('generic.content_field_big') }}
@stop

@section('panel_l_2_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['chars','options','desc'] ])
@stop

@section('panel_l_3_title')
    <i class="voyager-treasure-open"></i> {{ __('voyager::post.additional_fields') }}
@stop

@section('panel_l_3_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => false , 'fields' => ['id','cgy_id','item_belongsto_cgy_relationship','sort','enabled','title','pics','price_og','price_new','badge','star','stock','desc','chars','sku','options','created_at','updated_at','item_hasmany_tag_relationship'] ])
@stop

@section('panel_r_1_title')
    <i class="icon wb-clipboard"></i> {{ __('generic.adv_field') }}
@stop

@section('panel_r_1_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['price_og','price_new','stock','sort','enabled'] ])
@stop

@section('panel_r_2_title')
    {{ __('generic.content_field_small') }}
@stop

@section('panel_r_2_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['item_belongsto_cgy_relationship','item_hasmany_tag_relationship'] ])
@stop

@section('panel_r_3_all')

@stop

@section('javascript_child')
    <script>

    </script>
@stop
