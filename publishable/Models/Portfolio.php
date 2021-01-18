<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Voyager;

//儲存多媒體內容，包含單圖.多圖.影片等

class Portfolio extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'project_date' => 'datetime:Y/m/d',
    ];

    public function getEnabled(){
        if ($this->enabled == '1') {
            return '是';
        }else{
            return '否';
        }
    }

    protected $table = 'portfolios';

    //取得第一張圖
    public function getFirstPic(){
    	if (isset($this->pics) && strlen($this->pics) > 0) {
    		$pics = json_decode($this->pics, true);
    		return Voyager::image($pics[0]);
    	}else{
    		return null;
    	}
    }

    public function getPicsCount()
    {
        $pics = json_decode($this->pics,true);
        return count($pics);
    }

    public function getPicsArray()
    {
        $pics = [];
        foreach (json_decode($this->pics, true) as $value) {
            $pics[] = Voyager::image($value);
        }
        return $pics;
    }

    public function getPicByIndex($index)
    {
        if (isset($this->pics) && strlen($this->pics) > 0) {
            $pics = json_decode($this->pics,true);
            return $pics[$index];
        }else{
            return null;
        }
    }

    public function tags()
     {
         return $this->belongsToMany('App\Models\Tag')->withTimestamps();
     }

    public function getTagsListAttribute(){
        return $this->tags->pluck('id')->all();
    }

    public function getCgyNameAttribute($cgy)
    {
        if($cgy != null){
            return $cgy->title;
        }else{
            return __('Uncategoried');
        }
    }

    //取得Tag Class字串
    public function getTagString()
    {
        $result = '';
        $tags = $this->tags;
        foreach ($tags as $tag) {
            if (strlen($result) > 0) {
                $result = $result . ' ';
            }
            $result = $result . 'filter-' . $tag->id;
        }
        return $result;
    }

    //取得描述區塊裡頭的Tag Html內容
    public function getTagHtmlString()
    {
        $result = '';
        $tags = $this->tags;
        foreach ($tags as $tag) {
            if (strlen($result) > 0) {
                $result = $result . ',';
            }
            $result = $result . '<a href="' . url($tag->link) . '">' . $tag->title .'</a>';
        }
        return $result;
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

    /**
     * 限制查詢只包括某種文件分類的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param cgy 文件分類
     */
    public function scopeCgy( $query , $cgy )
    {
        if ($cgy != 'none') {
            return $query->where('cgy',$cgy );
        }else{
            return $query;
        }
    }

}
