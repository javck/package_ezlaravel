@extends('voyager::bread.browse')

@php
	$features = ['none'=>'不限','1'=>'是','0'=>'否'];
	$cgies = ['none'=>'不限'] + App\Models\Cgy::where('enabled',1)->pluck('title','id')->toArray();
	$status = ['none'=>'不限'] + json_decode(setting('constant.article_statuses'),true);
	$fields = [['key'=>'query_cgy_id','label'=>'分類：','options'=>$cgies],
				['key'=>'query_featured','label'=>'為精華：','options'=>$features],
				['key'=>'query_status','label'=>'上架狀態：','options'=>$status]];
@endphp
@section('search_filter')
	@include('Ezlaravel::includes._filterField', ['fields' => $fields])
@stop
