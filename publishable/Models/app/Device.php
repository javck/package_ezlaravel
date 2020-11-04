<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Device extends Model
{
	protected $table = 'devices';

	protected $fillable = ['deviceType','deviceCode','appToken','salt'];

}
