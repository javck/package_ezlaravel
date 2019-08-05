@extends('voyager::bread.browse')

@php

@endphp

@section('search_filter')
    @include('easyweb2::includes._filterField', ['fields' => null])
@stop

@section('javascript')
    @parent
    <script>
        
    </script>
@stop