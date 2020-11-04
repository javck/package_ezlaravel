<?php

namespace Javck\Ezlaravel\Http\Controllers;

use App\Http\Model\BI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadImagesDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use Javck\Ezlaravel\Http\Controllers\MyVoyagerBaseController;
use App\Models\Consolidation;
use Session;

class MyVoyagerOrderController extends MyVoyagerBaseController
{

    public function __construct()
    {
        $this->middleware('auth');
    }



}
