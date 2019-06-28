<aside id="sidebar">
	<div class="sidenav-outer">
		<div class="side-menu">
			<div class="menu-body">
				<ul class="nav nav-pills nav-stacked sidenav">
					@if(Auth::user()->isAdmin || Auth::user()->isEditor)
						<li class="sidebar-menu-list">
							<a href="{{url('/backend/tags')}}" class="sidebar-menu-options">
								<i class="fa fa-tag"></i>
							</a>
							<ul class="nested-dropdown animated fadeIn">
								<li><a href="{{url('/backend/tags')}}">{{ trans('label.tag') }}</a></li>
							</ul>
						</li>
						<li class="sidebar-menu-list">
							<a href="{{url('/backend/elements')}}" class="sidebar-menu-options">
								<i class="fa fa-sitemap"></i>
							</a>
							<ul class="nested-dropdown animated fadeIn">
								<li><a href="{{url('/backend/elements')}}">{{ trans('label.element') }}</a></li>
							</ul>
						</li>
						<li class="sidebar-menu-list">
							<a href="{{url('/backend/articles')}}" class="sidebar-menu-options">
								<i class="fa fa-file"></i>
							</a>
							<ul class="nested-dropdown animated fadeIn">
								<li><a href="{{url('/backend/articles')}}">{{ trans('label.article') }}</a></li>
							</ul>
						</li>
					@endif
					@if(Auth::user()->isAdmin)
						<li class="sidebar-menu-list">
							<a href="{{url('/backend/users')}}" class="sidebar-menu-options">
								<i class="fa fa-user"></i>
							</a>
							<ul class="nested-dropdown animated fadeIn">
								<li><a href="{{url('/backend/users')}}">{{ trans('label.user') }}</a></li>
							</ul>
						</li>
						<li class="sidebar-menu-list">
							<a href="{{url('/backend/contacts')}}" class="sidebar-menu-options">
							<i class="fa fa-envelope"></i>
							</a>
							<ul class="nested-dropdown animated fadeIn">
								<li><a href="{{url('/backend/contacts')}}">{{ trans('label.contact') }}</a></li>
							</ul>
						</li>
						<li class="sidebar-menu-list">
							<a href="{{url('/backend/items')}}" class="sidebar-menu-options">
								<i class="fa fa-shopping-bag"></i>
							</a>
							<ul class="nested-dropdown animated fadeIn">
								<li class="sidemenu-header">{{ trans('label.storeAdmin') }}</li>
								{{-- 							<li><a href="{{url('/backend/rules')}}">{{ trans('label.rule') }}</a></li>
	                                                        <li><a href="{{url('/backend/questions')}}">{{ trans('label.question') }}</a></li> --}}
								<li><a href="{{url('/backend/items')}}">{{ trans('label.item') }}</a></li>
								<li><a href="{{url('/backend/cgys')}}">{{ trans('label.cgy') }}</a></li>
								<li><a href="{{url('/backend/orders')}}">{{ trans('label.order') }}</a></li>
							</ul>
						</li>
					@endif
					@if(Auth::user()->isAdmin || Auth::user()->isEditor)	
						<li class="sidebar-menu-list">
							<a href="{{url('/backend/comments')}}" class="sidebar-menu-options">
							<i class="fa fa-comment"></i>
							</a>
							<ul class="nested-dropdown animated fadeIn">
								<li><a href="{{url('/backend/comments')}}">{{ trans('label.comment') }}</a></li>
							</ul>
						</li>
					@endif
					@if(Auth::user()->isAdmin || Auth::user()->isTeacher)
						<li class="sidebar-menu-list">
							<a href="{{url('/backend/courses')}}" class="sidebar-menu-options">
								<i class="fa fa-vcard"></i>
							</a>
							<ul class="nested-dropdown animated fadeIn">
								<li><a href="{{url('/backend/courses')}}">{{ trans('label.courses') }}</a></li>
								<li><a href="{{url('/backend/applyCourses')}}">{{ trans('label.applyCourses') }}</a></li>
								<li><a href="{{url('/backend/teachRecords')}}">{{ trans('menu.teachRecords')}}</a></li>
							</ul>
						</li>
					@endif
					@if(Auth::user()->isAdmin)
						<li class="sidebar-menu-list">
							<a href="{{url('/backend/serials')}}" class="sidebar-menu-options">
								<i class="fa fa-barcode"></i>
							</a>
							<ul class="nested-dropdown animated fadeIn">
								<li><a href="{{url('/backend/serials')}}">{{ trans('label.serials') }}</a></li>
							</ul>
						</li>
					@endif
					@if(Auth::user()->isAdmin)
						<li class="sidebar-menu-list">
							<a href="{{url('/backend/partners')}}" class="sidebar-menu-options">
								<i class="fa fa-users"></i>
							</a>
							<ul class="nested-dropdown animated fadeIn">
								<li><a href="{{url('/backend/partners')}}">{{ trans('label.partner') }}</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
		@include('partials.sidebar-widgets.sidebar-widgets')
	</div>
</aside>