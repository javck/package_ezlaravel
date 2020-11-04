<?php
namespace Javck\Ezlaravel\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Session;

use TCG\Voyager\Facades\Voyager;
use Javck\Ezlaravel\Http\Controllers\MyVoyagerBaseController;

class MyVoyagerTagController extends MyVoyagerBaseController
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('adminOnly'); 改用voyager內建permission
    }


}
