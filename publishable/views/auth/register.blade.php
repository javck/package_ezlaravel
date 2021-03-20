@extends('layouts.site')

@section('seo')
    @parent
    <meta name="keywords" content="">
    <meta name="description" content="{{ setting('site.description') }}">
@stop

@section('page_title'){{ trans('label.register') }}@stop

@section('body')
<div class="container clearfix notopmargin">
    <div class="row justify-content-center" style="margin-top:150px; margin-bottom:80px;">
        <div class="col-lg-7 col-md-10">
            <div class="card shadow-sm">
                <div class="card-header"><h4 class="mb-0">{{trans('label.register')}}</h4></div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ url('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">{{trans('label.username')}}</label>

                            <div class="col-md-12">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block info">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">{{trans('label.name')}}</label>

                            <div class="col-md-12">
                                @if(isset($user))
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                                @else
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                @endif

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{trans('label.email')}}</label>

                            <div class="col-md-12">
                                @if(isset($user))
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                @else
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @endif
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">{{trans('label.address')}}</label>

                            <div class="col-md-12">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">{{trans('label.mobile')}}</label>

                            <div class="col-md-12">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{{trans('label.password')}}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">{{trans('label.chkPassword')}}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        {{--  <div class="form-group">
                            <div class="col-md-12">
                                {!! NoCaptcha::display() !!}<br/>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>  --}}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{trans('label.register')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
