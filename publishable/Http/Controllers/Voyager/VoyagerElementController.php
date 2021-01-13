<?php

namespace App\Http\Controllers\Voyager;


use App\Models\Element;
use App\Models\Tag;
use Illuminate\Http\Request;
use Session;

use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\Voyager\VoyagerBaseController;

class VoyagerElementController extends VoyagerBaseController
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('adminOnly'); 改用voyager內建permission
    }

    //複製該元素，並且將啟用關閉
    public function copy($id)
    {
        $element = Element::find($id);
        if (isset($element)) {
            $newElement = $element->replicate();
            $newElement->title = $newElement->title . '(複製)';
            $newElement->enabled = false;
            $newElement->save();
            return redirect('admin/elements/' . $newElement->id . '/edit')->with([
                'message' => '元素複製成功',
                'alert-type' => 'success',
            ]);
        } else {
            return redirect('admin/elements')->with([
                'message' => '元素複製失敗，找不到該筆資料',
                'alert-type' => 'error',
            ]);
        }
    }
}
