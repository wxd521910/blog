<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// 实例化一个好吃的表
use App\Edible;
// 引入缓存的门面  第一步
use Illuminate\Support\Facades\Cache;
class EdibleController extends Controller{
    // 商品添加
    function add(){
        return view('edible/add');
    }

    //执行添加
    function adds(){
        $post = request()->except('_token');
        if(request()->hasFile('e_log')){
            $post['e_log']=upload('e_log');
        };
        $ins = Edible::insert($post);
        //判断是否添加到数据库
        if($ins){
            return redirect('edible/show');
        }
    }

    // 商品列表
    function show(){
        // 取出值  第二步
        $selects = cache('selects');
        dump($selects);
        // 判断 第三步,如果缓存不存在的话就走数据库
        if (!$selects) {
            echo "走DD";
            $selects = Edible::orderBy('e_id', 'desc')->paginate(2);

            // 存入缓存,过期时间 第四步
            Cache(['selects'=>$selects],10);
        }
        if(request()->ajax()){
            return view('edible/ajaxshow',['selects'=>$selects]);
        }else{
            return view('edible/show',['selects'=>$selects]);
        }
    }

    //ajax的唯一性
    function ajaxsole(){
        $e_name = request()->e_name;
        $where = [];
        if($e_name){
            $where['e_name']=$e_name;
        }
        $counts = Edible::where($where)->count();
        echo intval($counts);
    }

    // 删除
    function del($id){
        $dels = Edible::where('e_id',$id)->delete();
        if ($dels){
            return redirect('edible/show');
        }
    }
}
