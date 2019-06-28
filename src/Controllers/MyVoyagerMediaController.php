<?php
namespace Javck\Easyweb2\Controllers;


use App\Media;
use App\Tag;
use Illuminate\Http\Request;
use Session;

use TCG\Voyager\Facades\Voyager;
use Javck\Easyweb2\Controllers\MyVoyagerBaseController;

class MyVoyagerMediaController extends MyVoyagerBaseController
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('adminOnly'); 改用voyager內建permission
    }

    //複製該元素，並且將啟用關閉
    public function copy($id)
    {
        $media = Media::find($id);
        if (isset($media)) {
            $newMedia = $media->replicate();
            $newMedia->title = $newMedia->title . '(複製)';
            $newMedia->enabled = false;
            $newMedia->save();
            return redirect('admin/medias/' . $newMedia->id . '/edit')->with([
                    'message' => '多媒體複製成功',
                    'alert-type' => 'success',
                ]);
        }else{
            return redirect('admin/medias')->with([
                    'message' => '多媒體複製失敗，找不到該筆資料',
                    'alert-type' => 'error',
                ]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $media = Media::find($id);
        if (isset($media)) {
            $media->delete();
            return redirect('admin/medias')->with([
                'message' => '多媒體刪除成功',
                'alert-type' => 'success',
            ]);
        }else{
            return redirect('admin/medias')->with([
                    'message' => '多媒體刪除失敗，找不到該筆資料',
                    'alert-type' => 'error',
                ]);
        }
    }

}
