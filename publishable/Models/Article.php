<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;

//用來儲存文章，包含最新消息以及技術文件

class Article extends Model
{
    use Translatable,
        Resizable,
        HasFactory;

    const PUBLISHED = 'PUBLISHED';

    protected $translatable = ['title', 'seo_title', 'content_small', 'content', 'slug', 'meta_description', 'meta_keywords'];

    protected $guarded = [];

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->id;
        }

        parent::save();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag')->withTimestamps()->orderBy('sort');
    }

    public function getPicUrl(){
        if($this->pic != null){
            return Voyager::image($this->pic);
        }else{
            return null;
        }

    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function cgy()
    {
        return $this->belongsTo('App\Models\Cgy');
    }

    public function user(){
        //return $this->belongsTo('App\User');
        return $this->belongsTo('App\Models\User', 'author_id', 'id');
    }

    public function getTagsListAttribute(){
        return $this->tags->pluck('id')->all();
    }

    public function getCommentQtyAttribute(){

        return Comment::where('article_id',$this->id)->where('enabled',1)->count();
    }

    public function getIconClassAttribute(){
        switch ($this->mode) {
            case 'singleImg':
                return 'icon-camera-retro';
                break;
            case 'multiImgs':
            case 'puzzle':
                return 'icon-picture';
                break;
            case 'film':
                return 'icon-film';
                break;
            case 'sentense':
                return 'icon-align-justify2';
                break;
            case 'quote':
                return 'icon-quote-left';
                break;
            case 'link':
                return 'icon-link';
                break;
            default:
                return 'icon-camera-retro';
                break;
        }
    }

    public function getMedia($index)
    {
        $paths = explode(",",$this->mediums);
        if (count($paths)>0) {
            return $paths[$index];
        } else {
            return "";
        }
    }

    public function getAttachNameAry()
    {
        if (isset($this->attachment_names)) {
            return explode(",",$this->attachment_names);
        } else {
            return [];
        }


    }

    public function getAttachPathAry()
    {
        if (isset($this->attachment_paths)) {
            return json_decode($this->attachment_paths,true);
        } else {
            return [];
        }


    }

    public function getMediasAry()
    {
        return explode(",",$this->mediums);
    }

    public function getModeName()
    {
        if ($this->mode != null) {
            return json_decode(setting('constant.article_modes'),true)[$this->mode];
        }else{
            return "";
        }
    }

    // public function getEnabled(){
    //     if ($this->enabled == true) {
    //         return '是';
    //     }else{
    //         return '否';
    //     }
    // }

    /**
     * 限制查詢只包括某種文件分類的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param cgy 文件分類
     */
    public function scopeCgy( $query , $cgy )
    {
        if ($cgy != 'none') {
            return $query->where('cgy_id',$cgy );
        }else{
            return $query;
        }
    }

    /**
     * 限制查詢已上架的文章
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished(Builder $query)
    {
        return $query->where('status', '=', static::PUBLISHED);
    }

    /**
     * 限制查詢只包括某種文件標籤的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param cgy 文件分類
     */
    public function scopeTag( $query , $tagName )
    {
        $tag = Tag::where('title',$tagName)->first();
        $ac_ids = $tag->articles->pluck('id');
        if (isset($tag) && $tag != 'none') {
            return $query->whereIn('id',$ac_ids );
        }else{
            return $query;
        }
    }

}
