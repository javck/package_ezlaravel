<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Serial extends Model
{
    use HasFactory;

	protected $table = 'serials';

    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function getSent(){
        if ($this->isSent == '1') {
            return '寄出';
        }else{
            return '未寄出';
        }
    }

    public function getUsed(){
        if ($this->isUsed == '1') {
            return '已用';
        }else{
            return '未使用';
        }
    }

    public function getModeName(){
    	return json_decode(setting('constant.serial_modes'),true)[$this->mode];
    }

    /**
     * 限制查詢只包括某種模式的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param mode 模式
     */
    public function scopeMode( $query , $mode )
    {
        if ($mode != 'none') {
            return $query->where('mode',$mode );
        }else{
            return $query;
        }
    }

    /**
     * 限制查詢只包括某種使用狀態的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param used 使用狀態
     */
    public function scopeUsed( $query , $used )
    {
        if ($used != 'none') {
            return $query->where('isUsed',$used );
        }else{
            return $query;
        }
    }

    /**
     * 限制查詢只包括某種發送狀態的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param sent 發送狀態
     */
    public function scopeSent( $query , $sent )
    {
        if ($sent != 'none') {
            return $query->where('isSent',$sent );
        }else{
            return $query;
        }
    }
}
