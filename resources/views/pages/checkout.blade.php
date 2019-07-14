@extends('layouts.site')
@section('seo')

@stop
@section('page_title')提交訂單@stop

@section('page_top')
@stop

@section('body')
    @include('includes._checkout')
@stop

@section('js')
    <script type="text/javascript">
        jQuery(window).load(function () {

        });
    </script>

@stop