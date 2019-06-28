<?php

namespace Javck\Easyweb2\Model\Widgets;

use App\Contact;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use Auth;

class ContactsWidget extends BaseDimmer
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
        $count = Contact::whereNotIn('status',['isHandled','cancel','delay'])->count();
        //$qty_unhandled = Contact::count();
        $string = '筆聯絡單';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-group',
            'title' => "{$count}{$string}",
            'text' => "目前聯絡單數據:" . $count,
            'button' => [
                'text' => '更多資訊',
                'link' => route('voyager.contacts.index'),
            ],
            'image' => url('storage/images/widgets/contacts.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->hasPermission('browse_contacts');
    }
}
