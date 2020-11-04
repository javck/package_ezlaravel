<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//儲存多媒體內容，包含單圖.多圖.影片等

class Media extends Model
{
    protected $guarded = [];

    public function getEnabled(){
        if ($this->enabled == '1') {
            return '是';
        }else{
            return '否';
        }
    }

    protected $table = 'medias';

    //取得第一張圖
    public function getFirstPic(){
    	if (isset($this->pics) && strlen($this->pics) > 0) {
    		$pics = explode(',',$this->pics);
    		return $pics[0];
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

    //取得Tag Class字串
    public function getTagString()
    {
        $result = '';
        $tags = $this->tags;
        foreach ($tags as $tag) {
            if (strlen($result) > 0) {
                $result = $result . ' ';
            }
            $result = $result . 'pf-' . $tag->id;
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

    public function getPicsCount()
    {
        $pics = json_decode($this->pics,true);
        return count($pics);
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

    public function getLinkByIndex($index)
    {
        if (isset($this->l_link) && strlen($this->l_link) > 0) {
            $links = explode(',',$this->l_link);
            return $links[$index];
        }else{
            return null;
        }
    }

    //用以調整每個Item停留的時間
    public function getWaitTime(){
        return 16000 / $this->getPicsCount();
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
