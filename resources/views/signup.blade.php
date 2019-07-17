@extends('layouts.auth')

@section('page_title')
	註冊
@stop

@section('section')
	<form role="form" action="home" class="login-page-buttons">
		<div class="form-content">
			<fieldset class="form-group">
				<input type="text" class="form-control input-underline input-lg" id="" placeholder={{ Lang::get(\Session::get('lang').'.fullname') }}>
			</fieldset>

			<fieldset class="form-group">
				<input type="text" class="form-control input-underline input-lg" id="" placeholder={{ Lang::get(\Session::get('lang').'.email') }}>
			</fieldset>

			<fieldset class="form-group">
				<input type="password" class="form-control input-underline input-lg" id="" placeholder={{ Lang::get(\Session::get('lang').'.password') }}>
			</fieldset>
			<fieldset class="form-group">
				<input type="password" class="form-control input-underline input-lg" id="" placeholder={{ Lang::get(\Session::get('lang').'.repeatpass') }}>
			</fieldset>
		</div>
		<input type="submit" class="btn btn-rounded btn-white p1025" value="{{ Lang::get(\Session::get('lang').'.register') }}"/>
		<a href="/login" class="btn btn-rounded btn-white p1025">{{ Lang::get(\Session::get('lang').'.login') }}</a>
	</form>
@stop

@section('js')

@stop