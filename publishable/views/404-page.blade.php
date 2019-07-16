@extends('layouts.auth')

@section('page_title')
	{{  trans('messages.404error') }}
@stop

@section('section')
	<div class="four-container text-center">
		<h1>{{  trans('messages.404error') }}</h1>
		<br/>
		@isset($message)
			<p>{!! $message !!}</p>
		@endisset()
	</div>
	<br/>
@stop

@section('js')

@stop