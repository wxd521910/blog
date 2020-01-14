<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gara extends Model{
    //指定表名
    protected $table = 'gara';
    //指定id
    protected $primaryKey = 'gara_id';
    //关闭时间戳
    public $timestamps = false;
    //黑名单
    protected $guarded = [];
}
