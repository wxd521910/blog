<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// 实例化验证器
use Validator;
// 实例化一个Essay的model
use App\Essay;
class EssayController extends Controller
{
    // 视图
    function add(){
        return view('essay/add');
    }

    // 添加
    function adds(){
        // 接收所有的值
        $post = request()->except('_token');
         // 验证器
         $validator = Validator::make($post, [
            'e_name' => 'required',
            'e_names' => 'required',
            'e_email' => 'required',
            'e_keyw' => 'required',
            'e_descr' => 'required',
       
        ],[
            'e_name.required' => '标题标题不能为空',
            'e_names.required' => '文章作者不能为空',
            'e_email.required' => '作者不能为空',
            'e_keyw.required' => '关键字不能为空',
            'e_descr.required' => '网页描述不能为空',
            
            

        ]);
            if ($validator->fails()) {
                return redirect('essay/add')
                // 报错默认
                ->with('data',$post)
                ->withErrors($validator)
                ->withInput();
        }
        //文件上传
        if(request()->hasFile('e_log')){
            $post['e_log']=upload('e_log');
        };
        // 时间
        $post['e_thims'] = date('Y-m-d h:i:s',time());
     
        // 添加到数据库的语句
        $ins = Essay::insert($post);
        // 判断是否添加到数据库
        if($ins){
            return redirect('essay/show');
        }
    }
    // 展示
    function show(){
        //搜索->1
        $e_name = request()->e_name??'';
        $e_class = request()->e_class??'';
        //搜索->2
        $where = [];
        if($e_name){
            $where [] = ['e_name','like',$e_name];
        }
        if($e_class){
            $where [] = ['e_class','=',$e_class];
        }
        //条件保留->1
        $query = request()->all();
        $gets = Essay::where($where)->paginate(4);
        return view('essay/show',['gets'=>$gets],['query'=>$query]);
    }

    // 删除
    function del($id){
        $dels = Essay::where('e_id',$id)->delete();
        if($dels){
            return redirect('essay/show');
        }
    }
}
