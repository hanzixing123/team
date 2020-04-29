<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custom extends Model
{
    //
	protected $table="custom";
	protected $primaryKey ="cust_id";
	//关闭时间戳
	public $timestamps=false;

// 黑名单属性
	protected $guarded=[];





}
