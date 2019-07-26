<div class="modal1 mfp-hide" id="modal-login">
	<div class="block divcenter" style="background-color: #FFF; max-width: 400px;">
		<div style="padding: 50px;">
			<h3 class="font-body">登入你的帳號</h3>
			<form action="{{ url('admin/login') }}" method="post" class="nobottommargin">
				@csrf
				<div class="col_full">
					<label class="font-body capitalize" for="login-form-modal-username">帳號:</label>
					<input type="text" id="login-form-modal-username" name="username" value="" class="form-control" />
				</div>

				<div class="col_full">
					<label class="font-body capitalize" for="login-form-modal-password">密碼:</label>
					<input type="password" id="password" name="password" value="" class="form-control" />
				</div>

				<div class="col_full nobottommargin">
					<button class="button button-rounded nomargin" id="login-form-modal-submit" name="login-form-modal-submit" value="login">登入</button>
					<a href="{{ route('password.request') }}" class="fright">忘記密碼?</a>
				</div>
			</form>
			<div class="line line-sm"></div>
			<a href="#" class="button button-rounded btn-block t400 center capitalize si-facebook si-colored noleftmargin norightmargin">使用Facebook登入</a>
			<a href="#" class="button button-rounded btn-block t400 center capitalize si-gplus si-colored nomargin">使用Google登入</a>
		</div>
	</div>
</div>