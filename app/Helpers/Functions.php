<?php
    //公共文件
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
     };


    //  多文件上传
    function uploads($plot_logs){
        if(!$plot_logs){
            return;
        }
        $plot_logs = request()->file($plot_logs);

        $result=[];
        foreach($plot_logs as $v){
            $result[] = $v->store('upoads');
        }
        return $result;
    }


     


// //单双文件上传
// function upload($logo){
//     $photo = request()->file($logo);
//     if(is_array($photo)){
//         $result=[];
//         foreach($photo as $v){
//             if($v->isValid()){
//                 $result[]=$v->store('uploads');
//             }
//         }
//         return $result;
//     }else{
//         if($photo->isValid()){
//             $store_result = $photo->store('uploads');
//             return $store_result;
//         }
//     }
//     exit('未获取到上传文件或上传过程出错');
// }