<?php

namespace App\Http\Controllers\Voyager;


use App\Models\Item;
use App\Models\Tag;
use App\Models\Cgy;
use Illuminate\Http\Request;
use Session;

use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\Voyager\VoyagerBaseController;

class VoyagerItemController extends VoyagerBaseController
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('adminOnly'); 改用voyager內建permission
    }

    //複製該商品，並且將啟用關閉
    // public function copy($id)
    // {
    //     $item = Item::find($id);
    //     if (isset($item)) {
    //         $newItem = $media->replicate();
    //         $newItem->title = $newItem->title . '(複製)';
    //         $newItem->enabled = false;
    //         $newItem->save();
    //         return redirect('admin/items/' . $newItem->id . '/edit')->with([
    //                 'message' => '商品複製成功',
    //                 'alert-type' => 'success',
    //             ]);
    //     }else{
    //         return redirect('admin/items')->with([
    //                 'message' => '商品複製失敗，找不到該筆資料',
    //                 'alert-type' => 'error',
    //             ]);
    //     }
    // }


}
