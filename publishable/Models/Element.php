<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

//儲存前台的元件內容

class Element extends Model
{
    use Translatable,
        Resizable,
        HasFactory;

    protected $guarded = [];

    // public function setAnimationAttribute($value){
    //     if (isset($value) && $value != -1){
    //         $this->attributes['animation'] = json_decode(setting('constant.animStyles'),true)[$value];
    //     }else{
    //         $this->attributes['animation'] = null;
    //     }

    // }

//    public function getAnimationAttribute($value){
    //        return array_search($value, Constant::$animStyles);
    //    }

    public function getEnabled()
    {
        if ($this->enabled == '1') {
            return '是';
        } else {
            return '否';
        }
    }

    public function getPageName()
    {
        return json_decode(setting('constant.pages'), true)[$this->page];
    }

    public function getModeName()
    {
        return json_decode(setting('constant.element_modes'), true)[$this->mode];
    }

    public function getLangName()
    {
        return json_decode(setting('constant.lang'), true)[$this->lang];
    }

    public function getPartContent()
    {
        if (strlen($this->content) >= 30) {
            return mb_substr($this->content, 0, 25, "UTF-8") . "...";
        } else {
            return $this->content;
        }
    }

    public function getPicUrl()
    {
        if (strpos($this->pic, 'http') !== false || strpos($this->pic, 'https') !== false) {
            return $this->pic;
        } else {
            if (isset($this->pic)) {
                return \TCG\Voyager\Facades\Voyager::image($this->pic);
            } else {
                return null;
            }
        }
    }

    public function getPicName()
    {
        $info = pathinfo($this->pic);
        $file_name = basename($this->pic, '.' . $info['extension']);
        return $file_name;
    }

    public function getUrlAttribute($value)
    {
        if (isset($value)) {
            return $value;
        } else {
            return '#';
        }
    }
    /**
     *  根據裝置(手機或電腦)來決定要返回哪一個圖片資源，如果為手機版的圖則在.之前加上m，例如：1.jpg對應1m.jpg
     */
    public function getPicByAgent(){
        $agent = new Agent();
        if($agent->isMobile()){
            $newPath = Voyager::image(str_replace('.','m.',$this->pic));
            if(app('Ezlaravel')->chkResourceExist($newPath)){
                return $newPath;
            }
        }
        return Voyager::image($this->pic);
    }

    /**
     * 限制查詢只包括某頁面的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param page 頁面
     */
    public function scopePage($query, $page)
    {
        if ($page != 'none') {
            return $query->where('page', $page);
        } else {
            return $query;
        }

    }

    /**
     * 限制查詢模式為某個模式的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param mode 類型
     */
    //限制查詢模式為某個模式的工作。
    public function scopeMode($query, $mode)
    {
        if ($mode != 'none') {
            return $query->where('mode', $mode);
        } else {
            return $query;
        }

    }

    /**
     * 限制查詢只位於某位置的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param position 位置
     */
    public function scopePosition($query, $position)
    {
        if ($position != 'none') {
            return $query->where('position', $position);
        } else {
            return $query;
        }

    }

    //查詢為啟用，並把sort欄位由小到大排序
    public function scopeEnabled($query)
    {
        return $query->where('enabled', true)->orderBy('sort', 'asc');
    }
}
