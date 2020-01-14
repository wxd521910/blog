<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    function text(){
        $name = "吴晓东爱,";
        return view('akk',['name'=>$name]);
    }
    
    //执行登陆
    function login(){
        $post = request()->all();
        dd($post);
    }
}
