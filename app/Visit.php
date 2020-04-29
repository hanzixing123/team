<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //

    protected $table="visit";
	protected $primaryKey ="vis_id";
	//关闭时间戳
	public $timestamps=false;

// 黑名单属性
	protected $guarded=[];
}
