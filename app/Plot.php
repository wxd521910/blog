<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
     //指定表名
     protected $table = 'plot';
     //指定id
     protected $primaryKey = 'plot_id';
     //关闭时间戳
     public $timestamps = false;
     //黑名单
     protected $guarded = [];
}
