<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//儲存標籤資訊

class Tag extends Model
{
    protected $table = 'tags';

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
        return $this->belongsToMany('App\Models\Article')->withTimestamps();
    }

    public function items()
    {
        return $this->belongsToMany('App\Models\Item')->withTimestamps();
    }

    public function enabledItems()
    {
        return $this->items()->where('enabled',true)->orderBy('sort','asc')->get();
    }

    public function getTypesListAttribute(){
        return explode(',',$this->type);
    }

}
