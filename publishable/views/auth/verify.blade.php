@extends('layouts.site')

@section('seo')
    @parent
    <meta name="keywords" content="">
    <meta name="description" content="{{ setting('site.description') }}">
@stop

@section('page_title') 驗證Email @stop

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
<div class="container clearfix topmargin">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Lang::getFromJson('Verify your email') }} </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ Lang::getFromJson('Verify url is sended to your email address') }}
                        </div>
                    @endif

                    {{ Lang::getFromJson('Checked if you got the verify url') }}<br>
                    {{ Lang::getFromJson('If you did not received') }}，<a href="{{ route('verification.resend') }}">{{ Lang::getFromJson('Click to send again') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
