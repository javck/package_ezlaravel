<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
//儲存使用者資訊

class User extends \TCG\Voyager\Models\User
{
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'birthday' => 'datetime',
        'email_verified_at' => 'datetime',
        'settings' => 'array'
    ];

    public function getEnabled(){
        if ($this->enabled == '1') {
            return '是';
        }else{
            return '否';
        }
    }

    public function getPureDesc(){
        return strip_tags($this->desc);
    }

    public function getPicAttribute($value){
        if (isset($value) && $value != null) {
            return $value;
        } else {
            return 'users/avator.png';
        }   
    }


    public function scopeSuper($query)
    {
        if(Auth::user()->role->name != 'super'){
            return $query->where('username', '!=' , 'super');
        }
    }
}
