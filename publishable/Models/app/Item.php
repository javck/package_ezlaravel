<?php

namespace App;

use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class Item extends Model implements Buyable
{
    protected $guarded = [];


    //透過分類Id來尋找屬於該分類的商品
    public function scopeCgy( $query , $cgy_id )
    {
        if ($cgy_id != 'none') {
            return $query->where('cgy_id', $cgy_id);
        }else{
            return $query;
        }

    }

    public function scopeTag( $query , $tag_id)
    {
        if ($tag_id != 'none'){
            return $query->whereHas('tags',function($query) use ($tag_id){
                $query->where('id',$tag_id);
            });
        }else{
            return $query;
        }
    }

    //取得第一張圖
    public function getFirstPic(){
        if (isset($this->pics) && strlen($this->pics) > 0) {
            $pics = json_decode($this->pics,true);
            return $pics[0];
        }else{
            return null;
        }
    }

    //取得商品圖片數量
    public function getPicsCount()
    {
        if (isset($this->pics) && strlen($this->pics) > 0) {
            $pics = json_decode($this->pics,true);
            return count($pics);
        }else{
            return 0;
        }
    }

    //根據索引值來取得圖片
    public function getPicByIndex($index)
    {
        if (isset($this->pics) && strlen($this->pics) > 0) {
            $pics = json_decode($this->pics,true);
            return $pics[$index];
        }else{
            return null;
        }
    }

    //回傳商品圖片路徑陣列
    public function getPicArray(){
        if (isset($this->pics) && strlen($this->pics) > 0) {
            $pics = json_decode($this->pics,true);
            return $pics;
        }else{
            return null;
        }
    }

    //回傳商品特色內容陣列
    public function getCharsArray(){
        if (isset($this->chars) && strlen($this->chars) > 0) {
            $chars = explode(';',$this->chars);
            return $chars;
        }else{
            return null;
        }
    }

    public function getEnabled(){
        if ($this->enabled == '1') {
            return '是';
        }else{
            return '否';
        }
    }

    public function getPriceAttribute(){
        if (isset($this->price_new)){
            return $this->price_new;
        }else{
            return $this->price_og;
        }
    }

    public function cgy(){
        return $this->belongsTo(Cgy::class);
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    public function getBuyableDescription($options = null)
    {
        return $this->title;
    }

    public function getBuyablePrice($options = null)
    {
        return isset($this->price_new) ? $this->price_new : $this->price_og;
    }
}
