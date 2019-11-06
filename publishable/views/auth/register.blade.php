@extends('layouts.site')

@section('page_title', trans('label.register') )

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
<div class="container clearfix topmargin" style="max-width:550px;">
    <div class="fancy-title title-dotted-border title-center"><h1>{{trans('label.register')}}</h1>
    </div>

    <form class="form-horizontal" method="POST" action="{{ url('register') }}">
    {{ csrf_field() }}

        <div class="col_full {{ $errors->has('username') ? ' has-error' : '' }}">
            <label for="username">{{trans('label.username')}}</label>
            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
            @if ($errors->has('username'))
                <span class="help-block info">
                    <strong style="color:red">{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>

        <div class="col_full {{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="">{{trans('label.password')}}</label>
            <input id="password" type="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="col_full">
            <label for="password-confirm" class="">{{trans('label.chkPassword')}}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>


        <div class="col_full {{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">{{trans('label.name')}}</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="col_full {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="">{{trans('label.email')}}</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="col_full {{ $errors->has('address') ? ' has-error' : '' }}">
            <label for="address" class="">{{trans('label.address')}}</label>
            <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>
            @if ($errors->has('address'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>

        <div class="col_full {{ $errors->has('mobile') ? ' has-error' : '' }}">
            <label for="mobile" class="">{{trans('label.mobile')}}</label>
            <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required>
            @if ($errors->has('mobile'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('mobile') }}</strong>
                </span>
            @endif
        </div>

        <div class="col_full">
            {!! Recaptcha::render() !!}
            @if ($errors->has('g-recaptcha-response'))
                <span class="help-block" style="color:red">
                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </span>
                <br>
            @endif
        </div>


        <div class="col_full center">
            <button type="submit" class="btn btn-primary">
                {{trans('label.register')}}
            </button>
            <!-- <div class="col-md-6">
                <button type="submit" class="btn btn-primary">
                    {{trans('label.register')}}
                </button>
            </div> -->
        </div>
    </form>
</div>
@endsection
