<div id="top-bar" class="hidden-xs">

	<div class="container clearfix">

		<div class="col_half nobottommargin">

			<p class="nobottommargin"><strong>{{trans('label.tel')}}:</strong><a href="{{$phone_url}}"> {{$phone}}</a> | <strong>{{trans('label.email')}}:</strong> <a href="mailto:{{$service_mail}}">{{$service_mail}}</a></p>

		</div>

		<div class="col_half col_last fright nobottommargin">

			<!-- Top Links
            ============================================= -->
			<div class="top-links">
				<ul>
					<!--  幣別 -->
				{{--<li><a href="#">USD</a>--}}
				{{--<ul>--}}
				{{--<li><a href="#">EUR</a></li>--}}
				{{--<li><a href="#">AUD</a></li>--}}
				{{--<li><a href="#">GBP</a></li>--}}
				{{--</ul>--}}
				{{--</li>--}}
				<!-- 語系 -->
					{{--<li><a href="#">EN</a>--}}
					{{--<ul>--}}
					{{--<li><a href="#"><img src="images/icons/flags/french.png" alt="French"> FR</a></li>--}}
					{{--<li><a href="#"><img src="images/icons/flags/italian.png" alt="Italian"> IT</a></li>--}}
					{{--<li><a href="#"><img src="images/icons/flags/german.png" alt="German"> DE</a></li>--}}
					{{--</ul>--}}
					{{--</li>--}}
					@if (!Auth::check())
						<li><a href="{{url('/register')}}">{{trans('label.register')}}</a></li>
						<li><a href="{{url('/login')}}">{{trans('label.login')}}</a>
							<div class="top-link-section">
								<form action="{{url('/login')}}" method="POST">
									<input type="hidden" name="pos" value="frontend">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="input-group" id="top-login-username">
										<span class="input-group-addon"><i class="icon-user"></i></span>
										<input type="text" class="form-control" placeholder="{{trans('label.username')}}" id="username" name="username">
									</div>
									<div class="input-group" id="top-login-password">
										<span class="input-group-addon"><i class="icon-key"></i></span>
										<input type="password" class="form-control" placeholder="{{trans('label.password')}}" id="password" name="password">
									</div>
									<label class="checkbox">
										<input type="checkbox" value="remember-me"> {{trans('label.rememberMe')}}
									</label>
									<button class="btn btn-danger btn-block" type="submit">{{trans('label.login')}}</button>
								</form>
							</div>
						</li>
						<li><a href="{{url('/backend/login')}}"> {{trans('menu.backendLogin')}}</a></li>

					@else
						@if(Auth::user() != null and Auth::user()->isAdmin)
							<li><a href="{{ url('/backend')}}">{{trans('menu.backend')}}</a></li>
						@endif
						<a href="{{url('/logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{trans('label.logout')}}({{Auth::user()->name}})</a>
					@endif
					<form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
					@if(Auth::user() != null and Auth::user()->isAdmin)
						<li><a href="{{ url('/backend')}}">{{trans('menu.backend')}}</a></li>
					@endif
				</ul>
			</div><!-- .top-links end -->

		</div>

	</div>

</div><!-- #top-bar end -->