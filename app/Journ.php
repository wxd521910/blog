<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journ extends Model
{
    //指定表名
    protected $table = 'journ';
    //指定id
    protected $primaryKey = 'j_id';
    //关闭时间戳
    public $timestamps = false;
    //黑名单
    protected $guarded = [];
}
