<nav class="navbar navbar-light navbar-theme topnav-navbar bg-white text-xs-center navbar-fixed-top" style="padding:0 6px;">
    <button class="navbar-toggler sidebar-push hidden-md-up pull-xs-left" type="button" data-target="#bs-example-navbar-collapse-1">
        &#9776;
    </button>

    <a class="navbar-brand" href="{{url('/')}}">{{$site_name}}</a>

    <div class="collapse navbar-toggleable-xs text-xs-left" id="bs-example-navbar-collapse-1">
    	<ul class="nav navbar-nav pull-xs-right" style="display:inline-block;">

            <li class="nav-item hidden-md-down">
            	<a href="javascript:void(0)" id="rtlswitch" class="nav-link nav-link-3rd">
            		<span> {{ trans('label.menuPos') }} </span>
	            </a>
            </li>
            {{-- <li class="nav-item hidden-md-down admin-section ">
                <div class="dropdown">
                	<a href="javascript:void(0)" class="dropdown-toggle dropdown-caret nav-link nav-link-3rd" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>{{ Lang::get(\Session::get('lang').'.lang') }}</span></a>
                    <ul class="dropdown-menu navbar-nav lang animated fadeIn">
                        <li>
                        	<a class="dropdown-item" href="javascript:void(0)" onclick="changeLanguage('en')" class="lang">
                        	English</a>
                        </li>
                        <li>
                        	<a class="dropdown-item" href="javascript:void(0)" onclick="changeLanguage('de')" class="lang">
                        	Dutch</a>
                        </li>
                        <li>
                        	<a class="dropdown-item" href="javascript:void(0)" onclick="changeLanguage('ur')" class="lang">
                        	اردو</a>
                        </li>
                        <li>
                        	<a class="dropdown-item" href="javascript:void(0)" onclick="changeLanguage('hn')" class="lang">
                        	हिन्दी</a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            <li class="nav-item admin-section">
            	<div class="dropdown admin-dropdown">
            		<a href class="dropdown-toggle dropdown-caret nav-link nav-link-3rd" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	            		<img src="{{asset('images/'. Auth::user()->pic)}}" class="topnav-img img-circle" alt=""><span class="hidden-md-down clearfix">{{ Auth::user()->name  }}</span>
	            	</a>
	            	<ul class="dropdown-menu navbar-nav animated fadeIn">
            			<li>
							<a class="dropdown-item text-xs-left" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{trans('label.logout')}}({{Auth::user()->name}})</a>
							<form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: one;">
								{{ csrf_field() }}
							</form>
            			</li>
		            </ul>
            	</div>
            </li>
        </ul>
        
        <ul class="nav navbar-nav" style="display:inline-block;">
        	<li class="nav-item hidden-md-down">
            	<a href="{{url('/')}}" class="nav-link nav-link-3rd">
            		<span> {{ trans('label.backFrontend') }} </span>
	            </a>
            </li>
            {{-- <li class="nav-item hidden-md-down text-xs-left">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle dropdown-caret nav-link nav-link-3rd" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope"></i><span class="label label-success">5</span></a>
                    <div class="dropdown-menu animated fadeIn" style="left: 0;right: auto;">
                    	<div class="messages-top">
	                        <a class="dropdown-item text-xs-left" href="javascript:void(0)">
	                        	{{ Lang::get(\Session::get('lang').'.topnav1') }}
	                        </a>
	                    </div>
                        <div class="dropdown-messages">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="message-sender">
									{{ Lang::get(\Session::get('lang').'.lucy') }}
								</div>
								<div class="message-header">
									{{ Lang::get(\Session::get('lang').'.topnavheader1') }}
								</div>
	                        </a>
	                    </div>
	                    <div class="dropdown-messages">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="message-sender">
								{{ Lang::get(\Session::get('lang').'.diptesh') }}
								</div>
								<div class="message-header">
									{{ Lang::get(\Session::get('lang').'.topnavheader2') }}
								</div>
	                        </a>
	                    </div>
	                    <div class="dropdown-messages">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="message-sender">
								{{ Lang::get(\Session::get('lang').'.weng') }}
								</div>
								<div class="message-header">
								{{ Lang::get(\Session::get('lang').'.topnavheader3') }}			
								</div>
	                        </a>
	                    </div>
	                    <div class="dropdown-messages">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="message-sender">
								{{ Lang::get(\Session::get('lang').'.jade') }}
								</div>
								<div class="message-header">
									{{ Lang::get(\Session::get('lang').'.topnavheader4') }}			
								</div>
	                        </a>
	                    </div>
                    </div>
                </div>
            </li> --}}
            {{-- <li class="nav-item hidden-md-down text-xs-left">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle dropdown-caret nav-link nav-link-3rd" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i><span class="label label-danger">13</span></a>
                    <div class="dropdown-menu animated fadeIn" style="left: 0;right: auto;">
                    	<div class="messages-top">
	                        <a class="dropdown-item text-xs-left" href="javascript:void(0)">
	                        	{{ Lang::get(\Session::get('lang').'.threenotifications') }}
	                        </a>
	                    </div>
                        <div class="dropdown-messages dropdown-notifications">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="notification">
									<i class="fa fa-thumbs-up"></i>
									{{ Lang::get(\Session::get('lang').'.runuma') }}
								</div>
	                        </a>
	                    </div>
	                    <div class="dropdown-messages dropdown-notifications">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="notification">
									<i class="fa fa-thumbs-up"></i>
									{{ Lang::get(\Session::get('lang').'.harshita') }}
								</div>
	                        </a>
	                    </div>
	                    <div class="dropdown-messages dropdown-notifications">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="notification">
									<i class="fa fa-user-plus"></i>
									{{ Lang::get(\Session::get('lang').'.archana') }}
								</div>
	                        </a>
	                    </div>
	                    <div class="dropdown-messages dropdown-notifications">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="notification">
									<i class="fa fa-user-times"></i>
									{{ Lang::get(\Session::get('lang').'.animesh') }}
								</div>
	                        </a>
	                    </div>
                    </div>
                </div>
            </li> --}}
        </ul>  
    </div>
    <ul class="nav navbar-nav pull-xs-right hidd hidden-md-down">	
		<li class="dropdown admin-dropdown">
			<a href class="dropdown-toggle dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="{{asset('images/flat-avatar.png')}}" class="topnav-img" alt="" style="width: 30px;">
			</a>
			<ul class="dropdown-menu pull-xs-right">
				<li class="text-xs-left"><a href="profile">profile</a></li>
				<li class="text-xs-left"><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{trans('label.logout')}}</a></li>
				<form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: one;">
					{{ csrf_field() }}
				</form>
			</ul>
		</li>
	</ul>
	<!-- Single button -->
</nav>