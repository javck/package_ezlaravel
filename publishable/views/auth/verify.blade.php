@extends('layouts.app')

@section('content')
<div class="container">
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
