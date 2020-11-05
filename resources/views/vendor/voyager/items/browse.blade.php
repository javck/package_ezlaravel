@extends('voyager::bread.browse')

@php

@endphp

@section('search_filter')
    @include('Ezlaravel::includes._filterField', ['fields' => null])
@stop

@section('javascript')
    @parent
    <script>

    </script>
@stop
