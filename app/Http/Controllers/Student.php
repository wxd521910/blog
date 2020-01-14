<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    function index(){
        echo "学生列表";
    }

    function add(){
        return view('add');
    }
    //执行
    function adds(){
        $post = request()->post();
        dd($post);
    }
    function text($id){
        echo "$id";
    }
}
