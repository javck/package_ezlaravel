@extends('voyager::bread.browse')

@php
	$services = ['none'=>'不限'] + json_decode(setting('constant.services'),true);
	$status = ['none'=>'不限'] + json_decode(setting('constant.contact_statuses'),true);
	$tags = ['none'=>'不限'] + App\Models\Tag::where('enabled',1)->where('type','contact')->get()->pluck('title','id')->toArray();

    $_creators = App\Models\Contact::whereNotNull('creator_id')->get()->pluck('creator_id')->toArray();
    $creators = ['none'=>'不限'] + App\Models\User::findOrFail($_creators)->pluck('name','id')->toArray();

    $_handlers = App\Models\Contact::whereNotNull('handler_id')->get()->pluck('handler_id')->toArray();
    $handlers = ['none'=>'不限'] + App\Models\User::findOrFail($_handlers)->pluck('name','id')->toArray();
	$fields = [['key'=>'query_service','label'=>'所需服務：','options'=>$services],
				['key'=>'query_status','label'=>'處理狀態：','options'=>$status]
				// ['key'=>'query_creator_id','label'=>'查詢建立者：','options'=>$creators],
				// ['key'=>'query_handler_id','label'=>'查詢處理者：','options'=>$handlers]
            ];
@endphp
@section('search_filter')
	@include('Ezlaravel::includes._filterField', ['fields' => $fields])
@stop


@section('javascript')
	@parent
    <script>
		$(document).ready(function()
        {
            $("#query_service").select2();
            $("#query_status").select2();
            // $("#query_creator_id").select2();
            // $("#query_handler_id").select2();
        });
    </script>
@stop
