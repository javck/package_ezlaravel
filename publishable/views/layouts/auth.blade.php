@extends('layouts.plain')
@section('body')
	<div class="login-page">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
				<a href="/home" class="hvr-pulse-grow">
					<img src="{{ Voyager::image(setting('site.logo'),'images/flat.png') }}" class="user-avatar" />
				</a>
				<h1>{{ Voyager::setting('site.title') }}</h1>
					@yield('section')
			</div>			
		</div>
	</div>
@stop
@section('js')
@stop