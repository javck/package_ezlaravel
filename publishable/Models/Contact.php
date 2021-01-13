<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Partner;

//儲存提交的聯絡資訊以及課程報名資訊

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getServiceName()
    {
    	$serviceName  = json_decode(setting('constant.services'),true)[$this->service];
    	return $serviceName;
    }

    public function getEnabled(){
        if ($this->enabled == true) {
            return '是';
        }else{
            return '否';
        }
    }

    public function getIsHandledName()
    {
    	if ($this->isHandled == true) {
    		return trans('label.isHandled');
    	}else{
    		return trans('label.notHandled');
    	}
    }

    public function getSourceName()
    {
        if ($this->source != null) {
            return json_decode(setting('constant.sources'),true)[$this->source];
        }else{
            return "";
        }

    }

    public function getPartnerName()
    {
        if ($this->partner_id != null) {
            $partner = Partner::find($this->partner_id);
            if (isset($partner)) {
                return $partner->name;
            }else{
                return "未知單位";
            }
        }else{
            return "本苑";
        }

    }

    public function setTagsAttribute($value)
    {
        if(isset($value) && is_array($value)){
            $this->attributes['tags'] = implode(',', $value );
        }else{
            $this->attributes['tags'] = null;
        }
    }

    public function getTagsAttribute($value)
    {
        return explode(',',$value);
    }

    /**
     * 限制查詢只包括某種服務的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param service 服務
     */
    public function scopeService( $query , $service )
    {
        if ($service != 'none') {
            return $query->where('service',$service );
        }else{
            return $query;
        }
    }

    /**
     * 限制查詢只包括某種處理狀態的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param isHandled 處理狀態
     */
    public function scopeIsHandled( $query , $isHandled )
    {
        if ($isHandled != 'none') {
            return $query->where('isHandled',$isHandled );
        }else{
            return $query;
        }
    }
}
