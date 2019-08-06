<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $guarded = [];

    public function getEnabled(){
        if ($this->enabled == '1') {
            return '是';
        }else{
            return '否';
        }
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
