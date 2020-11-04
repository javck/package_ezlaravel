<?php

namespace Javck\Ezlaravel\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Element;
use App\Models\Tag;
use App\Models\User;
use Response;
use App\Http\Model\BI;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{


    public function showSingleItem(Request $request){

        $item = Item::findOrFail($request->all()['item_id']);
        $path = $request->path();
        return view('Ezlaravel::partials.singleItem',compact('item','path'));
    }


    public function queryItem(Request $request , Item $item){
        $inputs = $request->all();

        $data = array('price' => $item->price , 'stock' => $item->stock , 'pics' => $item->pics , 'cgy_id' => $item->cgy_id ,
            'star' => $item->star , 'desc' => $item->desc , 'chars' => $item->chars , 'sku' => $item->sku , 'options' => $item->options , 'sort' => $item->sort , 'title' => $item->title , 'badge' => $item->badge);
        return Response::json($data);
    }

    public function loadTopCart(Request $request){
        return view('Ezlaravel::includes._topCart');
    }

    //查詢該城市所有的區域
    //Parameter 1 : county 城市key
    public function queryAreas(ApiRequest $request){
        $inputs = $request->all();
        $areas = json_decode(setting('constant.counties'),true);
        $data = array('areas' => $areas);
        return Response::json($data);
    }

    //查詢該頁面所擁有的網頁元素位置
    //Parameter 1 : page 網頁key
    public function queryPositions(Request $request){
        $inputs = $request->all();
        if ($inputs['page'] == 'none') {
            $_positions = Element::distinct()->orderBy('position','asc')->pluck('position','position')->all();
            $positions = array_merge(['none'=>'不限'] , $_positions);
        }else{
            $_positions = Element::where('page',$inputs['page'])->groupby('position')->distinct()->pluck('position','position')->all();
            $positions = array_merge(['none'=>'不限'] , $_positions);
        }

        return Response::json(['positions' => $positions]);
    }

    //查詢該頁面所擁有的網頁元素模式
    //Parameter 1 : page 網頁key
    public function queryElementModes(Request $request){

        $inputs = $request->all();
        if ($inputs['page'] == 'none') {
            $result = array_merge(['none'=>'不限'] , json_decode(setting('constant.element_modes'),true));
        }else{
            $result = ['none'=>'不限'];
            $modes = Element::where('page',$inputs['page'])->groupby('mode')->distinct()->pluck('mode');
            foreach ($modes as $key => $value) {
                $result[$value] = json_decode(setting('constant.element_modes'),true)[$value];
            }
        }

        return Response::json(['modes' => $result]);
    }

}
