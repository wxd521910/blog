<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//实例化一个mode
use App\Books;
//验证器
use App\Http\Requests\StoreBooks;
class Bookss extends Controller
{
    //添加视图
    function index(){
        return view('books/add');
    }

    //执行添加
    function indexs( StoreBooks $request){
        // 接收值
        $post = $request->except('_token');
        //文件上传
        if(request()->hasFile('b_log')){
            $post['b_log']=$this->upload('b_log');
        }
        $create_books = Books::create($post);
        if($create_books){
            return redirect('bookss/show',);
        }
    }

    //文件上传
    function upload($b_log){
        if(request()->file($b_log)->isValid()){
             //接收文件
             $photo = request()->file($b_log);
             //上传文件
             $store_result = $photo->store('upoads');
             return $store_result;
        }
        exit('没有文件被上传或者出现上传错误');
     }

    //数据展示
    function show(){
         //搜索->1
        $b_name = request()->b_name??'';
        //搜索->2
        $where = [];
        if($b_name){
            $where [] = ['b_name','like',$b_name];
        }
        //条件保留->1
        $query = request()->all();
        $selects = Books::where($where)->paginate(4);
        return view('books/show',['selects'=>$selects],['query'=>$query]);
    }

}
