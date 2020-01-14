<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// 实例化一个车库的model
use App\Gara;
use Memcache;
use DB;
// 引入缓存的门面  第一步
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
class GaraController extends Controller{
    // 管理登陆视图
    function adminviews(){
        return view('gara/add');
    }

    // 添加管理视图
    function addadmin(){
        $post = request()->except('_token');
        // 密码加密操作
        $gara_pwd = md5($post['gara_pwd']);
        if(!empty($gara_pwd)){ 
            $post['gara_pwd']=$gara_pwd;
        }
        // 时间
        $post['gara_thim'] = date('Y-m-d h:i:s',time());
       
        // 添加到数据库的语句
        $ins = Gara::insert($post);
        // 判断是否添加到数据库
        if($ins){
            return redirect('gara/adminshow');
        }
    }

    // 登陆视图
    function login(){
        return view('gara/login');
    }

    //执行登陆
    function logins(){
        $post = request()->except('_token');
        // 密码加密操作
        $gara_pwd = md5($post['gara_pwd']);
        if(!empty($gara_pwd)){ 
            $post['gara_pwd']=$gara_pwd;
        }
        $first = Gara::where($post)->first();

        if($first){
            if($first['gara_admin']==1){
                session(['admin'=>$first]);
                request()->session()->save();
                return redirect('gara/adminshow');
            }
        }else{
            return redirect('gara/login')->with('erro','密码或账号错误');
        }
        if($first){
            if($first['gara_admin']==2){
                session(['admin'=>$first]);
                request()->session()->save();
                return redirect('gara/adminshow');
            }
        }else{
            return redirect('gara/login')->with('erro','密码或账号错误');
        }
    }

    // 主管展示页面
    function adminshow(){
        //搜索->1
        $gara_name = request()->gara_name??'';
        // 取出值  第二步
        $gets = cache('gets');
        //搜索->2
        $where = [];
        if($gara_name){
            $where [] = ['gara_name','like',$gara_name];
        }
        //条件保留->1
        $query = request()->all();
        if(!$gets){
            echo "走DD";
            $gets = Gara::where($where)->get();
            // 存入缓存,过期时间 第四步
            Cache(['gets'=>$gets],10);
        }
        return view('gara/adminshow',['gets'=>$gets],['query'=>$query]);
    }

    // 主管展示页面删除
    function admindel($id){
        $dels = Gara::where('gara_id',$id)->delete();
        if($dels){
            return redirect('gara/adminshow');
        }
    }

    // 主管展示页面详情视图
    function deta($id){
        // 访问量
        $res = Redis::setnx('show_'.$id,1);
        if(!$res){
            Redis::incr('show_'.$id);
        }
        $current = Redis::get('show_'.$id);
        // 查询所有但单条
        $gets = Gara::where('gara_id',$id)->first();
        return view('gara/deta',['gets'=>$gets,'current'=>$current]);
    }

    // 主管展示页面执行留言
    function message($id){
        
        $post = request()->except('_token');
        // 添加到数据库的语句
        $ins = Gara::where('gara_id',$id)->update($post);
        // 判断是否添加到数据库
        if($ins!==false){
            return redirect('gara/adminshow');
        }
        
    }

    // 库管员展示页面
    function storeshow(){
        $gets = Gara::get();
        return view('gara/storeshow',['gets'=>$gets]);
    }
}
