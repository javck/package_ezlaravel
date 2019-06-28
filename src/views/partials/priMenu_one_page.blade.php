<ul class="one-page-menu" @isset($options->data_easing) data-easing="{{ $options->data_easing }}" @endisset @isset($options->data_speed) data-speed="{{ $options->data_speed }}" @endisset @isset($options->data_offset) data-offset="{{ $options->data_offset }}" @endisset>
    @foreach($items as $menu_item)
    	@if ($menu_item->link() == '#modal-login')
   			<li class="menu-item-emphasis"><a href="#modal-login" data-lightbox="inline"><div>{{ $menu_item->title }}</div></a></li>
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
	                	@if (substr( $item->link(), 0, 1 ) === "#")
				    		<li><a href="#" data-href="{{ $item->link() }}">{{ $item->title }}</a>
				    	@else
				    		<li><a class="{{ Request::is($item->link())? 'current' : ''}}" href="{{ $item->link() }}">{{ $item->title }}</a>
				    	@endif
		                    @php
					            $sub2menu = $item->children;
					        @endphp

					        @if(isset($sub2menu) && count($sub2menu) > 0)
					            <ul>
					                @foreach($sub2menu as $sub2_item)
					                	@if (substr( $sub2_item->link(), 0, 1 ) === "#")
								    		<li><a href="#" data-href="{{ $sub2_item->link() }}">{{ $sub2_item->title }}</a>
								    	@else
								    		<li><a href="{{$sub2_item->link()}}">{{$sub2_item->title}} </a></li>
								    	@endif
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