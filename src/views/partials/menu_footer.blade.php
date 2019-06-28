@foreach($items as $menu_item)
	<a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a> @if(!$loop->last)/@endif
@endforeach
