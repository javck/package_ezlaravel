<div class="modal1 mfp-hide" id="modal-login">
	<div class="block divcenter" style="background-color: #FFF; max-width: 400px;">
		<div style="padding: 50px;">
			<h3 class="font-body">{{ __('label.login_username') }}</h3>
			<form action="{{ url('admin/login') }}" method="post" class="nobottommargin">
				@csrf
				<div class="col_full">
					<label class="font-body capitalize" for="username">{{ __('label.username') }}:</label>
					<input type="text" id="username" name="username" value="" class="form-control" />
				</div>

				<div class="col_full">
					<label class="font-body capitalize" for="password">{{ __('label.password') }}:</label>
					<input type="password" id="password" name="password" value="" class="form-control" />
				</div>

				<div class="col_full nobottommargin">
					<button class="button button-rounded nomargin" id="submit" name="submit" value="login">{{ __('label.login') }}</button>
					<a href="{{ route('register') }}" class="fright">{{ __('label.register') }}</a><br>
					<a href="{{ route('password.request') }}" class="fright">{{ __('label.forgetPwd') }}?</a>
				</div>
			</form>
            <div class="line line-sm"></div>
            @if( setting('admin.useSocialite')!= null && setting('admin.useSocialite') == true)
                <a href="{{ url('login/facebook') }}" class="button button-rounded btn-block t400 center capitalize si-facebook si-colored noleftmargin norightmargin">{{ __('label.facebook_login') }}</a>
                <a href="{{ url('login/google') }}" class="button button-rounded btn-block t400 center capitalize si-gplus si-colored nomargin">{{ __('label.google_login') }}</a>
            @endif
        </div>
	</div>
</div>
