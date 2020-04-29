<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesman extends Model
{
    //
	protected $table="salesman";
	protected $primaryKey ="sale_id";
	//关闭时间戳
	public $timestamps=false;

// 黑名单属性
	protected $guarded=[];


}
