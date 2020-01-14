<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Essay extends Model
{
     //指定表名
     protected $table = 'essay';
     //指定id
     protected $primaryKey = 'e_id';
     //关闭时间戳
     public $timestamps = false;
     //黑名单
     protected $guarded = [];
 }

