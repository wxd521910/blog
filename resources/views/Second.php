<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Second extends Model
{
    //指定表名
    protected $table = 'Second';
    //指定id
    protected $primaryKey = 's_id';
    //关闭时间戳
    public $timestamps = false;
    //黑名单
    protected $guarded = [];
}
