@extends('layouts.mail')

@section('content')
    <p>{{ $user->name }} 您好：</p><br>
    <p>
        您於 {{ $user->updated_at->format('Y年m月d日H點i分') }} 至{{ setting('site.title') }}進行註冊，需由下列的驗證連結進入激活。
    </p><br>
    <p>
        @php
            $url = url('/activate?id='.$user->id.'&activate='.$activate );
        @endphp
        帳號激活：<a href="{{ $url }}"> {{ $url }}</a>
    </p><br>
    <p>
        提醒您，帳號需要完成激活動作才能正常使用唷，請儘快完成Email驗證以進行激活。
    </p>
@stop
