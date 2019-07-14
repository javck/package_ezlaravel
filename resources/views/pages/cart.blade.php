@extends('layouts.site')
@section('seo')

@stop
@section('page_title')我的購物車@stop

@section('page_top')
@stop

@section('body')
    @include('includes._cart')
@stop

@section('js')
    <script type="text/javascript">
        jQuery(window).load(function () {

        });
    </script>

@stop