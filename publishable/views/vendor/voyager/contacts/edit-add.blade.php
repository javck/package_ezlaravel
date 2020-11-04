@extends('layouts.edit-add-master')


@section('panel_l_1_title')
    <i class="voyager-list"></i> {{ __('generic.basic_field') }}
@stop

@section('panel_l_1_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['name','mobile','email','subject','message'] ])
@stop

@section('panel_r_1_title')
    {{ __('generic.adv_field') }}
@stop

@section('panel_r_1_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['creator_id','source','isHandled','service','contact_belongsto_user_relationship_1','status'] ])
@stop

@section('panel_r_2_title')
    {{ __('voyager::post.additional_fields') }}
@stop

@section('panel_r_2_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => false , 'fields' => ['name', 'mobile', 'email', 'subject', 'message', 'service', 'source', 'isHandled','contact_belongsto_user_relationship_1','status','contact_belongsto_user_relationship_2','handleRecord'] ])
@stop


@section('panel_l_2_title')
    <i class="voyager-bell"></i>{{ __('generic.handle_record') }}
@stop

@section('panel_l_2_action')
    <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen" aria-hidden="true"></a>
@stop

@section('panel_l_2_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['handleRecord','contact_belongsto_user_relationship_2'] ])
@stop

@section('panel_l_3_all')

@stop

@section('panel_r_3_all')

@stop
