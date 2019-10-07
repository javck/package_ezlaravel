<?php
namespace Javck\Easyweb2\Http\Controllers;


use App\Contact;
use App\Tag;
use Illuminate\Http\Request;
use Session;

use TCG\Voyager\Facades\Voyager;
use Javck\Easyweb2\Http\Controllers\MyVoyagerBaseController;

class MyVoyagerContactController extends MyVoyagerBaseController
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('adminOnly'); 改用voyager內建permission
    }


}
