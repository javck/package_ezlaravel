<?php

namespace App\Http\Controllers\Voyager;

use App\Models\Comment;
use Illuminate\Http\Request;
use Session;

use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\Voyager\VoyagerBaseController;

class VoyagerCommentController extends VoyagerBaseController
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('adminOnly'); 改用voyager內建permission
    }
}
