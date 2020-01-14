<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// 实例化验证器
use Validator;
// 实例化model
use App\Journ;
// 引入缓存的门面  第一步
use Illuminate\Support\Facades\Cache;
class JournController extends Controller{
    // 新闻添加视图
    function index(){
        return view('journview/add');
    }

    // 执行添加
    function indexs(){
        $post = request()->except('_token');
         // 验证器
         $validator = Validator::make($post, [
            'j_name' => 'required|unique:journ|between:2,30|regex:/^\w+s/',
            'j_names' => 'required',
            'j_time' => 'required',
       
        ],[
            'j_name.required' => '新闻标题不能为空',
            'j_name.unique' => '新闻标题已重复',
            'j_name.between' => '新闻标题在2~30',
            'j_name.regex' => '新闻标题需是中文、字母、数字、下划线组成',
            'j_names.required' => '新闻作者必填',
            'j_time.required' => '发布时间必填',

        ]);
            if ($validator->fails()) {
                return redirect('journ/index')
                // 报错默认
                ->with('data',$post)
                ->withErrors($validator)
                ->withInput();
        }
         //添加到数据库
         $ins = Journ::insert($post);
         //判断并跳转
         if($ins){
             return redirect('seconds/show');
         }
    }

    //展示页面
    function show(){
         //搜索->1
         $j_name = request()->j_name??'';
         $where = [];
        if($j_name){
            $where [] = ['j_name','like',$j_name];
        }
        //条件保留->1
        $query = request()->all();
        //读取缓存
        $gets = cache('gets');
        if(!$gets){
            $gets = Journ::where($where)->paginate(2);
            // 存入缓存
             // 存入缓存,过期时间 第四步
             Cache(['gets'=>$gets],300);
        }
        return view('journview/show',['gets'=>$gets] );
    }
}
