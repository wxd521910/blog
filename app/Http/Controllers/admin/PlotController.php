<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// 实例化一个Plot的model
use App\Plot;
class PlotController extends Controller{
    //添加视图
    function add(){
        return view('plot/add');
    }
    // 执行添加
    function adds(){
        $post = request()->except('_token');
        
        //单文件上传
        if(request()->hasFile('plot_log')){
            $post['plot_log']=upload('plot_log');
        }
        // 多文件上传
        if(isset($post['plot_logs'])){
            $post['plot_logs']=uploads('plot_logs');
            $post['plot_logs']=implode('|',$post['plot_logs']);
        }
        
        $ins = Plot::insert($post);
        //判断是否添加到数据库
        if($ins){
            return redirect('polt/show');
        }
    }

    // 展示
    function show(){
        $ins = Plot::get();
        // 多文件上传处理
        foreach($ins as $v){
            $v->plot_logs = explode('|',$v->plot_logs);
        }
        return view('plot/show',['ins'=>$ins]);
    }

    // 删除
    function del($id){
         $del = Plot::where('plot_id',$id)->delete();
        if($del){
            return redirect('polt/show');
        }
    }
}
