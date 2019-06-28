<div class="side-widgets">
	<div class="widgets-content">
		<div class="text-xs-center">
			<img src="{{asset('images/flat.png')}}" class="user-avatar" />
			<div class="text-xs-center avatar-name">
				{{ trans('label.adminer') }}
			</div>
		</div>

		<div class="calendar-container text-xs-center" >
			<div id="calendar2" class="fc-header-title"></div>
		</div>
		<!-- 事件提醒  -->
		<div class="news-feed">
			<div class="feed-header">{{ trans('label.notify')}}</div>
			<div class="feed-content">
				<ul class="feed">
					@if(setting('admin.isUseComment') == 'true')
						@foreach ($comment_noReply as $comment)
							<li>
								<a href="{{url('backend/comments')}}" data-toggle="tooltip" title="{{ $comment->content }}">{{ $comment->name }}</a> <span class="feed-date">{{ $comment->created_at->diffForHumans() }}</span>
							</li>
						@endforeach
					@endif

					@foreach ($contact_noReply as $contact)
						<li>
							<a href="{{url('backend/contacts/show/'.$contact->id)}}" data-toggle="tooltip" title="{{ $contact->subject }}">{{ $contact->subject }}</a> <span class="feed-date">{{ $contact->created_at->diffForHumans() }}</span>
						</li>
					@endforeach

					@if(setting('admin.isUseShop') == 'true')
						@foreach ($order_noHandle as $order)
							<li>
								<a href="{{url('backend/orders/'.$order->id)}}" data-toggle="tooltip" title="{{ trans('label.sendOrder',['owner' =>$order->owner->name]) }}">{{ trans('label.sendOrder',['owner' =>$order->owner->name]) }}</a> <span class="feed-date">{{ $order->created_at->diffForHumans() }}</span>
							</li>
						@endforeach
					@endif


				</ul>
			</div>
		</div>
	</div>
</div>
