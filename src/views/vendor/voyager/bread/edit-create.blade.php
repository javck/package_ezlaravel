@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('label.'.(isset($record) ? 'edit_' : 'add_').$slug))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('label.'.(isset($record) ? 'edit_' : 'add_').$slug) }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="col-sm-12">
        @if(isset($record))
            {{ Form::model($record,['method'=>'patch','url'=>'admin/'.$slug.'/'.$record->id ,'role'=>'form','files'=>true]) }}
            <a class="btn btn-info btn-rounded" href="{{ url('/admin/elements/copy/' . $record->id ) }}">{{ trans('label.copy_'.$slug) }} </a>
        @else
            {{ Form::open(['action'=>$dataType->controller.'@store','role'=>'form','files'=>true]) }}
        @endif
            
        
        {{ Form::submit(__('label.'.(isset($record) ? 'edit' : 'add')),['class'=>'btn btn-primary']) }}
        {{ Form::reset(__('label.clear'),['class'=>'btn btn-default']) }}
        <a class="btn btn-success btn-rounded" href="{{ url('/admin/'.$slug) }}">{{ trans('label.back_'.$slug) }} </a><br><br>
        @include($slug.'._form')
        {{ Form::close() }}
        </div>   
    </div>
@stop
