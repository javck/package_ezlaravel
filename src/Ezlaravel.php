<?php

namespace Javck\Ezlaravel;

use DB;
use Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Input;
use Image;
use Session;
use App\Models\Tag;
use Carbon\Carbon;

class Ezlaravel
{
	public function __construct()
	{

	}

	//Ezlaravel函式庫===================================================================

	//將標籤ids字串，轉換成標籤標題字串
	public function transferTagIdsToTagTitles($tagsStr){
		if (isset($tagsStr) && strlen($tagsStr) > 0) {
			$str_tags = substr($tagsStr , 1 , count($tagsStr)-2);
			$tag_ary = explode(',' , $str_tags);
			for ($i=0; $i < count($tag_ary) ; $i++) {
				$tag = Tag::findOrFail($tag_ary[$i]);
				$tag_ary[$i] = $tag->title;
			}
			return implode("," , $tag_ary);
		}else{
			return null;
		}
	}

	//取得Storage資料夾裡頭子資料夾的檔案清單，isPath是否包含路徑
	public function getFolderAry($dictionary,$isPath){
		$_results = Storage::files($dictionary);
		if (!$isPath) {
			$results= array();
	        foreach ($_results as $value) {
	            $results[] = str_replace($dictionary.'/','',$value);
	        }
	        return $results;
		}
		return $_results;
	}

    //處理Tag標籤的新增，第二參數為新增標籤的類型
    public function handleTag(Request $request , $type)
    {
        if ($request->has('tags_list')){
            $tags = $request->input('tags_list');
            foreach ($tags as $key => $value) {
                if (is_null(Tag::where('id',$value)->first())) {
                    $newTag = Tag::create(['title' => $value , 'link' => '#' , 'type' => $type]);
                    $tags[$key] = $newTag->id;
                }
            }
        }else{
            $tags = null;
        }

        return $tags;
    }

    //處理索引頁上方的過濾器，同時確認輸入項和Session是否有值來研判是否需要下此條件
	//第一參數為輸入項陣列，第二參數為要處理的輸入項id
	public function handleSearchFilter($inputs,$id){
		$queryId = null;
		if ( isset($inputs[$id]) ) {
            if ( $inputs[$id] != 'none') {
                $queryId = $inputs[$id];
                Session::put($id, $queryId);
            }else{
                if ( Session::has($id) ) {
                    Session::forget($id);
                }
            }
        }else{
            if ( Session::has($id) ) {
                $queryId = Session::get($id);
            }
        }
        return $queryId;
	}

	//回傳Constant Dropdown的key選單之對應鍵值
	//$constantKey Constant Dropdown key
	//$key 對應鍵陣列
	public function getConstDropDownVal($constantKey,$key){
		$result = __('not_found_option');
		if(isset($constantKey) && isset($key)){
			$setting = json_decode(setting('constant.'. $constantKey),true);
			if(is_array($key)){
				$tmp ="";
				foreach ($key as $item) {
					if(strlen($tmp) > 0){
						$tmp = $tmp . ',';
					}
					if(isset($setting[$item])){
						$tmp = $tmp . $setting[$item];
					}
				}
				if(strlen($tmp) > 0 ){
					$result = $tmp;
				}
			}else{
				if(isset($setting[$key])){
					$result = $setting[$key];
				}
			}
		}
		return $result;
	}

	//回傳Tag Dropdown的key選單之對應鍵值
	//$ids 流水號陣列或流水號
	public function getTagDropDownVal($ids){
		$result = '';
		if(isset($ids)){
			if(is_array($ids)){
				$tmp = "";
				foreach ($ids as $id) {
					if(is_numeric($id)){
						$tag = Tag::findOrFail($id);
						if(strlen($tmp) > 0){
							$tmp = $tmp . ',';
						}
						$tmp = $tmp . $tag->title;
					}else if($id != ''){
						$tmp = $tmp . __('not_found_option');
					}
				}
				if(strlen($tmp) > 0){
					$result = $tmp;
				}
			}else if(is_numeric($ids)){
				$tag = Tag::findOrFail($ids);
				if(isset($tag)){
					$result = $tag->title;
				}
			}
		}
		return $result;
	}

	//回傳排序網址
	//$dataType 該頁面的dataType
	//$dataRow 該欄位的dataRow
	//$orderBy 設定以哪個欄位進行排序
	//$sortOrder 排序方式
	public static function buildSortUrl($dataType,$dataRow,$orderBy, $sortOrder)
    {
        $params = \Request::all();
        $isDesc = $sortOrder != 'asc';
        if ($dataRow->field == $orderBy && $isDesc) {
            $params['sort_order'] = 'asc';
        } else {
            $params['sort_order'] = 'desc';
        }
        $params['order_by'] = $dataRow->field;

        return url('/admin'). '/' .$dataType->slug.'?'.http_build_query($params);
    }

	/**
	 * 獲取當前控制器與方法
	 *
	 * @return array
	 */
	public function getCurrentAction()
	{
	    $action = Route::current()->getActionName();
	    list($class, $method) = explode('@', $action);

	    return ['controller' => $class, 'method' => $method];
	}

	/**
	 * 檢查所傳入的Tag陣列有無新的標籤，若有的話進行新增
	 *
	 * @return array
	 */
	public function chkNewTag($tags)
	{
		foreach ($tags as $key => $value) {
            if (is_null(Tag::where('id',$value)->first())) {
                $newTag = Tag::create(['title' => $value ,'link' => '#' ,'type' => 'def']);
                $tags[$key] = $newTag->id;
            }
        }
        return $tags;
	}

	//公用函式庫=========================================================================

	    /*
	  *  生成隨機的檔名
	  *  $qty 可傳入檔名的長度
	  */
	public function randomFileName($qty)
	{
		$ran_chars = '1234567890abcdefghijklmnopqrstuvwxyz';
		$ran_string = '';
		for($i = 0; $i < $qty; $i++){
			$ran_string .= $ran_chars[rand(0, 35)];
		}
		return $ran_string;
	}

	/*
	 * 建立FB大頭照網址
	 */
	public function buildFbPicPath($fb_id)
	{
		return 'https://graph.facebook.com/' . $fb_id . '/picture?type=large';
	}

	//檢查某字串的開頭是否為該子字串,$haystack為受檢查字串，$needle為要比對字串
	public function startsWith($haystack, $needle) {
	    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
	}

	//檢查某字串的結尾是否為該子字串,$haystack為受檢查字串，$needle為要比對字串
	public function endsWith($haystack, $needle) {
	    // search forward starting from end minus needle length characters
	    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
	}

	//將4000號以內的id轉換成3碼編碼
	public function createCode($id){
		$_code = dechex($id);
		while(strlen($_code) < 3){
			$_code = '0' . $_code;
		}
		return $_code;
	}

	//序號生成器，需傳入序號前置碼與數量
	// public function createSerials($pre = '' , $qty) {
	// 	$key_sum = $qty * 1.5;    //CD-Key最大数量,防止重复值
 // 		$key_total = $qty;    //最终需要的CD-Key数量
 // 		$length = 7;  //生成序號長度

 // 		/* 生成随机数字串 */
	// 	 $serials = array();
	// 	 for ($i=0; $i<$key_sum; $i++)
	// 	 {
	// 	 	 $serial = '';
	// 	     for ($j=0; $j<$length; $j++){
	// 	     	$serial = $serial . $this->rdmLetter();
	// 	     }
	// 	     $serials[] = $pre . $serial;
	// 	 }

	// 	  /* 过滤重复串并且提取最终需要的CD-Key数量 */
	// 	 $serials = array_values(array_unique($serials));
	// 	 $serial_result = array();
	// 	 for ($i=0; $i<$key_total; $i++)
	// 	 {
	// 	     $serial_result[] = $serials[$i];
	// 	 }
	// 	 return $serial_result;
	// }

	//生成隨機字母
	public function rdmLetter(){
		$letters = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
		 return $letters[(mt_rand(0, count($letters) - 1))];
	}

	/**
	 * 檢查所傳入的網址資源是否存在
	 *
	 * @return boolean
	 */
	public function chkResourceExist($url)
	{
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_NOBODY, true);
		curl_exec($ch);
		$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		if($statusCode == '200'){
			return true;
		}else{
			return false;
		}
	}

}
