<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Voyager;

//用來儲存文章的回應

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function article()
    {
        return $this->belongsTo('App\Models\Article', 'article_id', 'id');
    }

    public function getPicAttribute(){
    	if (isset($this->user)) {
    		return $this->user->pic;
    	} else {
    		return 'avator.png';
    	}

    }

    public function getNameAttribute($value)
    {
    	if ($value != null and strlen($value) > 0) {
    		return $value;
    	} else {
    		return "匿名者";
    	}

    }

    public function getReplysAttribute()
    {
        $replys = Comment::where('reply_to',$this->id)->where('enabled',1)->orderBy('created_at','desc')->get();
        if ($replys != null && count($replys) > 0) {
            return $replys;
        } else {
            return array();
        }

    }

    public function getReplied()
    {
        $reply_count = Comment::where('reply_to',$this->id)->where('enabled',1)->count();
        if ($reply_count == 0) {
            return '尚未';
        } else {
            return '完成';
        }

    }

    public function getEnabled(){
        if ($this->enabled == true) {
            return '是';
        }else{
            return '否';
        }
    }

    /**
     * 限制查詢只包括某種啟動狀態的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param enabled 文件啟動狀態
     */
    public function scopeEnabled( $query , $enabled )
    {
        if ($enabled != 'none') {
            return $query->where('enabled',$enabled );
        }else{
            return $query;
        }
    }

    /**
     * 限制查詢只包括某種回覆狀態的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param isReply 文件回覆狀態
     */
    public function scopeIsReply( $query , $isReply )
    {
        if ($isReply != 'none') {
            $acs = Comment::where('enabled',1)->whereNotNull('reply_to')->distinct('reply_to')->pluck('reply_to')->toArray();
            //dd([5,6,7]);
            if ($isReply == "1") {
                return $query->whereIn('id',$acs);
            } else {
                return $query->whereNull('reply_to')->whereNotIn('id',$acs);
            }
        }else{
            return $query;
        }
    }
}
