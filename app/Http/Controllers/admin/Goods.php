<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
// 第二种方法
use App\Http\Requests\StoreBlogPost;
//第三种方法
use Validator;
class Goods extends Controller{   
    //商品添加视图
    function add(){
        return view('goods/add');
    }

    //添加执行
    function adds(){
        // function adds(StoreBlogPost $request){
        
        //验证第一种方法
        // $request->validate([
        //     'brand_name' => 'required|unique:brand|max:255',
        //     'brand_price' => 'required|unique:brand|max:255',
        // ],[
        //     'brand_price.required'=>'员工号必填',
        //     'brand_name.required'=>'员工必填',
        //     'brand_name.unique'=>'员工名字已重复',
        // ]);        //接收值
        $post = request()->except('_token');

        // 第三种   
        $validator = Validator::make($post, [
            'brand_name' => 'required|unique:posts|max:255',
            'brand_price' => 'required|unique:brand|max:255'
        ],[
            'brand_price.required'=>'员工号必填',
            'brand_name.required'=>'员工必填',
            'brand_name.unique'=>'员工名字已重复',
        ]);
            if ($validator->fails()) {
                return redirect('goods/add')
                ->withErrors($validator)
                ->withInput();
            }

        //调用文件上传
        //接收值
        if(request()->hasFile('brand_log')){
            $post['brand_log']=$this->upload('brand_log');
        }
        //添加到数据库
        $ins = DB::table('brand')->insert($post);
      
        //判断并跳转
        if($ins){
            return redirect('goods/show');
        }
    }

    //文件上传的方法/
    function upload($filename){
       if(request()->file($filename)->isValid()){
            //接收文件
            $photo = request()->file($filename);
            //上传文件
            $store_result = $photo->store('upoads');
            return $store_result;
       }
       exit('没有文件被上传或者出现上传错误');
    }

    //列表展示
    function show(){
        //搜索->1
        $b_name = request()->brand_name??'';
        //搜索->2
        $where = [];
        if($b_name){
            $where [] = ['brand_name','like',$b_name];
        }
        //条件保留->1
        $query = request()->all();
        //查询数据,查询所有-->get
        $gets = DB::table('brand')->where($where)->paginate(4);
        //条件保留->2
        return view('goods/show',['gets'=>$gets,'query'=>$query]);
        
    }

    //删除
    function del($id){
        $del = DB::table('brand')->where('brand_id',$id)->delete();
        if($del){
            return redirect('goods/show');
        }
        
    }

    //编辑
    function unp($id){
        //查询数据，进行数据返回 
        $firsts = DB::table('brand')->where('brand_id',$id)->first();
        return view('goods\unps',['firsts'=>$firsts]);
    }

    //执行编辑
    function unps(Request $request , $id){
        //接收值
        $post = $request->except('_token');
        //文件上传
        if(request()->hasFile('brand_log')){
            $post['brand_log']=$this->upload('brand_log');
        }
        //添加到数据库
        $ins = DB::table('brand')->where('brand_id',$id)->update($post);
        //判断并跳转
        if($ins!==false){
            return redirect('goods/show');
        }
    }

    // --------------------------------------------------------------------------------------------


    
}
