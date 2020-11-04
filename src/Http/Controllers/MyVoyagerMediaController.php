<?php
namespace Javck\Ezlaravel\Http\Controllers;


use App\Models\Media;
use App\Models\Tag;
use Illuminate\Http\Request;
use Session;

use TCG\Voyager\Facades\Voyager;
use Javck\Ezlaravel\Http\Controllers\MyVoyagerBaseController;

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

    //暫停使用，使用TCG自帶
    // public function destroy(Request $request, $id)
    // {
    //     $result = true;
    //     if($id != 0){
    //         $media = Media::find($id);
    //         if (isset($media)) {
    //             $media->delete();
    //         }else{
    //             $result = false;
    //         }
    //     }else{
    //         //代表為Mass Delete
    //         $str_ids = $request->all()['ids'];

    //         $ids = explode(',',$str_ids);
    //         foreach ($ids as $value) {
    //             $media = Media::find($value);
    //             if (isset($media)) {
    //                 $media->delete();
    //             }else{
    //                 $result = false;
    //             }
    //         }
    //     }

    //     if ($result) {
    //         return redirect('admin/medias')->with([
    //             'message' => '多媒體刪除成功',
    //             'alert-type' => 'success',
    //         ]);
    //     }else{
    //         return redirect('admin/medias')->with([
    //             'message' => '多媒體刪除失敗，找不到該筆資料',
    //             'alert-type' => 'error',
    //         ]);
    //     }
    // }

}
