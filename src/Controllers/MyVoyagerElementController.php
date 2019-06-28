<?php
namespace Javck\Easyweb2\Controllers;


use App\Element;
use App\Tag;
use Illuminate\Http\Request;
use Session;

use TCG\Voyager\Facades\Voyager;
use Javck\Easyweb2\Controllers\MyVoyagerBaseController;

class MyVoyagerElementController extends MyVoyagerBaseController
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
        }else{
            return redirect('admin/elements')->with([
                    'message' => '元素複製失敗，找不到該筆資料',
                    'alert-type' => 'error',
                ]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $element = Element::find($id);
        if (isset($element)) {
            $element->delete();
            return redirect('admin/elements')->with([
                'message' => '元素刪除成功',
                'alert-type' => 'success',
            ]);
        }else{
            return redirect('admin/elements')->with([
                    'message' => '元素刪除失敗，找不到該筆資料',
                    'alert-type' => 'error',
                ]);
        }
    }

}
