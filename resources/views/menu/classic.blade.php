<nav id="primary-menu" class="{{ setting('canvas.pri_menu_class') }}">
	<ul>
	    @foreach($items as $menu_item)
	    	@if ($menu_item->link() == '#modal-login')
	    		@if (!Auth::check())
					<li class="menu-item-emphasis"><a href="#modal-login" data-lightbox="inline"><div>{{ $menu_item->title }}</div></a></li>
				@else
					<li class=""><a href="{{url('/admin')}}"><div>歡迎,{{ Auth::user()->name }}</div></a></li>
	    		@endif
	   			
	    		@php
	    			continue;
	    		@endphp
	    	@endif
	    	@if (substr( $menu_item->link(), 0, 1 ) === "#")
	    		<li><a href="#" data-href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
	    	@else
	    		<li><a class="{{ Request::is($menu_item->link())? 'current' : ''}}" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
	    	@endif
        	@php
	            $submenu = $menu_item->children;
	        @endphp

		    @if(isset($submenu) && count($submenu) > 0)
	            <ul>
	                @foreach($submenu as $item)
	                    <li><a href="{{$item->link()}}">{{$item->title}} </a>
		                    @php
					            $sub2menu = $item->children;
					        @endphp

					        @if(isset($sub2menu) && count($sub2menu) > 0)
					            <ul>
					                @foreach($sub2menu as $sub2_item)
					                    <li><a href="{{$sub2_item->link()}}">{{$sub2_item->title}} </a></li>
					                    
					                @endforeach
					            </ul>
					        @endif
				        </li>
	                @endforeach
	            </ul>
		    @endif
	        </li>
	    @endforeach
	</ul>
</nav>