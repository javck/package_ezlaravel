<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Voyager;

class User extends \TCG\Voyager\Models\User
{
 use HasFactory, Notifiable;

 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
  'name',
  'email',
  'password',
 ];

 /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
 protected $hidden = [
  'password',
  'remember_token',
 ];

 /**
  * The attributes that should be cast to native types.
  *
  * @var array
  */
 protected $casts = [
  'email_verified_at' => 'datetime',
  'birthday'          => 'datetime',
  'email_verified_at' => 'datetime',
  'settings'          => 'array',
 ];

 public function getEnabled()
 {
  if ($this->enabled == '1') {
   return '是';
  } else {
   return '否';
  }
 }

 public function getPureDesc()
 {
  return strip_tags($this->desc);
 }

 public function getPicAttribute($value)
 {
  if (isset($value) && $value != null) {
   return Voyager::image($value);
  } else {
   return Voyager::image('users/avator.png');
  }
 }

 public function scopeSuper($query)
 {
  if (Auth::user()->role->name != 'super') {
   return $query->where('username', '!=', 'super');
  }
 }
}
