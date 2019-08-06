<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//儲存標籤資訊

class Tag extends Model
{
    protected $guarded = [];

    public function getEnabled(){
        if ($this->enabled == '1') {
            return '是';
        }else{
            return '否';
        }
    }

    public function articles()
    {
        return $this->belongsToMany('App\Article')->withTimestamps();
    }

    public function items()
    {
        return $this->belongsToMany('App\Item')->withTimestamps();
    }

    public function getTypesListAttribute(){
        return explode(',',$this->type);
    }

}
