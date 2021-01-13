<?php

namespace App\Http\Controllers\Voyager;

use App\Models\Partner;
use Illuminate\Http\Request;
use Session;

use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\Voyager\VoyagerBaseController;

class VoyagerPartnerController extends VoyagerBaseController
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('adminOnly'); 改用voyager內建permission
    }
}
