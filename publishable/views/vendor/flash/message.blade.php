@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
        @if (Session::has('flash_notification.important'))
            <div class="alert alert-important alert-{{ Session::get('flash_notification.level') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                {{ Session::get('flash_notification.message') }}
            </div>
        @else
            <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                {{ Session::get('flash_notification.message') }}
            </div>
        @endif
    @endif
@endif
