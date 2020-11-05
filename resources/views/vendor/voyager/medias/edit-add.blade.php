@extends('layouts.edit-add-master')

@section('panel_top')
    @if(isset($dataTypeContent))
        <a class="btn btn-info btn-rounded" href="{{ url('/admin/medias/copy/' . $dataTypeContent->id ) }}">{{ trans('label.copy_'.$dataType->slug) }} </a>
        <a class="btn btn-danger btn-rounded" href="{{ url('/admin/medias/del/' . $dataTypeContent->id ) }}">{{ trans('label.delete_'.$dataType->slug) }} </a>
    @endif
    <a class="btn btn-success btn-rounded" href="{{ url('/admin/'.$dataType->slug) }}">{{ trans('label.back_'.$dataType->slug) }} </a>
@stop


@section('panel_l_1_title')
    <i class="voyager-list"></i> {{ __('generic.basic_field') }}
@stop

@section('panel_l_1_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent ,
    'isInclude' => true , 'fields' => ['id','title','detail_title','url'] ])
@stop

@section('panel_r_1_title')
    {{ __('generic.project_data_field') }}
@stop

@section('panel_r_1_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent ,
    'isInclude' => true , 'fields' => ['client','project_date'] ])
@stop

@section('panel_r_2_title')
    {{ __('generic.adv_field') }}
@stop

@section('panel_r_2_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent ,
    'isInclude' => true , 'fields' =>
    ['enabled','sort','media_belongsto_cgy_relationship','media_belongstomany_tag_relationship'] ])
@stop

@section('panel_l_2_title')
    <i class="voyager-images"></i>{{ __('generic.media') }}
@stop

@section('panel_l_2_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent ,
    'isInclude' => true , 'fields' => ['pics','content'] ])
@stop

@section('panel_l_3_title')
    <i class="voyager-treasure-open"></i>{{ __('generic.additional_field') }}
@stop

@section('panel_l_3_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent ,
    'isInclude' => false , 'fields' =>
    ['title','cgy_id','url','detail_title','enabled','sort','content','pics','client','project_date','media_belongsto_cgy_relationship','created_at','media_belongstomany_tag_relationship']
    ])
@stop

@section('panel_r_3_all')
@stop
