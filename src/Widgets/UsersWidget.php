<?php

namespace Javck\Easyweb2\Widgets;

use App\User;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use Auth;

class UsersWidget extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = User::whereNotIn('enabled',[0])->count();
        //$string = trans_choice('voyager::dimmer.user', $count);
        $string = '位用戶';
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-people',
            'title'  => "{$count} {$string}",
            'text'   => "目前有效用戶數:" . $count,
            'button' => [
                'text' => '更多資訊',
                'link' => route('voyager.users.index') . '?key=enabled&filter=true&s='
            ],
            'image' => url('storage/widgets/users.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        //return app('VoyagerAuth')->user()->can('browse', Voyager::model('User'));
        return Auth::user()->hasPermission('browse_users');
    }
}
