@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
        'heading' => $title ,
        'level' => 'h1'
    ])

    @include('beautymail::templates.ark.contentStart')
		<p>{{$content}}</p>
    @include('beautymail::templates.ark.contentEnd')

@stop