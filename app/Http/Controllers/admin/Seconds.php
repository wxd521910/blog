<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//先实例化一下model
use App\Second;
use DB;

class Seconds extends Controller{
    //学生视图添加
    function index(){
        return view('seconds/add');
    }

    //执行添加
    function indexs(){
        $post = request()->except('_token');
        // $inserts = DB::table('second')->insert($post);
        $inserts = Second::create($post);
        if($inserts){
            return redirect('seconds/show');
        }
    }

    //列表展示
    function show(){
        $gets = DB::table('second')->get();
        return view('seconds/shows',['gets'=>$gets]);
    }

    //删除
    function del($id){
        // $gets = DB::table('second')->where('s_id',$id)->delete();
        $gets = Second::destroy($id);
        if($gets){
            return redirect('seconds/show');
        }
    }

    //修改视图
    function unp($id){
        //查询数据，进行数据返回 
        // $firsts = DB::table('second')->where('s_id',$id)->first();
        $firsts = Second::find($id);
        return view('seconds\unps',['firsts'=>$firsts]);
    }
    //执行编辑
    function unps(Request $request , $id){
        //接收值
        $post = $request->except('_token');
        //添加到数据库
        // $ins = DB::table('second')->where('s_id',$id)->update($post);
        $ins = Second::where('s_id',$id)->update($post);
        //判断并跳转
        if($ins!==false){
            return redirect('seconds/show');
        }
    }
}
