<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>后台数据展示</title>
</head>
<body>m
    <table class="table">
        <h3 align="center">后台数据展示</h3>
        <h4 align="center">
            <!-- <a href="{{url('essay/add')}}">文章添加</a> -->
        </h4><hr/>
        
        <div align="center">
        <form action="" method="get">       
            <select name="e_class">
                <option value="0">请选择</option>
                <option value="新闻" $query['e_class']=='新闻'??'selected'>新闻</option>
                <option value="恋爱" $query['e_class']=='恋爱'??'selected'>恋爱</option>
            </select>                                                   
            <input type="text" name="e_name" placeholder="请输入文章标题" value="{{$query['e_name']??''}}">
             
            <input type="submit" value="搜索">
        </form>
        </div><hr/>
        <thead>
            <tr align="center">
                <td><b>ID</b></td>
                <td><b>文章标题</b></td>
                <td><b>文章分类</b></td>
                <td><b>是否重要</b></td>
                <td><b>是否展示</b></td>
                <td><b>文章作者</b></td>
                <td><b>作者email</b></td>
                <td><b>关键字</b></td>
                <td><b>描述</b></td>
                <td><b>上传文件</b></td>
                <td><b>添加时间</b></td>
                <td><b>操作</b></td>
                
            </tr>
            @foreach($gets as $v)
                <tr align="center">
                    <td>{{$v->e_id}}</td>
                    <td>{{$v->e_name}}</td>
                    <td>{{$v->e_class}}</td>
                    <td>{{$v->e_sign}}</td>
                    <td>@if($v->e_show=="是") √ @else × @endif</td>
                    <td>{{$v->e_names}}</td>
                    <td>{{$v->e_email}}</td>
                    <td>{{$v->e_keyw}}</td>
                    <td>{{$v->e_descr}}</td>
                    <td>
                        <img src="{{env('UPLOAD_URL')}}{{$v->e_log}}" alt="" while="20px" height="40px">
                    </td>
                    <td>{{$v->e_thims}}</td>
                    <td>
                        <a href="{{url('goods/unp'.$v->e_id)}}" class="btn btn-info">修改</a>
                        <a href="{{url('essay/del'.$v->e_id)}}" class="btn btn-danger">删除</a>
                    </td>
                </tr>
            @endforeach
            <td colspan="12">
            {{$gets->appends($query??'')->links()}}
            </td>
        </tbody>
    </table>
</body>
</html>
