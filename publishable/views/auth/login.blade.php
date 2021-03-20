@extends('layouts.site')

@section('seo')
    @parent
    <meta name="keywords" content="">
    <meta name="description" content="{{ setting('site.description') }}">
@stop

@section('page_title') 登入 @stop

@section('body')
<div class="container clearfix">
    <div class="row justify-content-center" style="margin-top:150px; margin-bottom:80px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">登入</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('voyager.login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">{{trans('label.username')}}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">密碼</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 記得我!
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    登入
                                </button>

                                @if(setting('admin.useSocialite')!= null && setting('admin.useSocialite') == true)
                                    <a href="{{ url('login/facebook') }}" class="button button-rounded btn-block t400 center capitalize si-facebook si-colored noleftmargin norightmargin">{{ __('label.facebook_login') }}</a>
                                    <a href="{{ url('login/google') }}" class="button button-rounded btn-block t400 center capitalize si-gplus si-colored nomargin">{{ __('label.google_login') }}</a>
                                @endif


                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    忘記密碼?
                                </a>
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    我要註冊
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
