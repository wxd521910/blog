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
<body>
    <table class="table">
        <h3 align="center">后台数据展示</h3>
        <h3 align="center">
            <a href="{{url('journ/index')}}">添加</a>
        </h3>
        <div align="center">
            <form action="" method="get">
                <input type="text" name="j_name" id="" placeholder="请输入新闻标题" value="{{$query['j_name']??''}}">
                <input type="submit" value="搜索">
            </form>
        </div><hr/>
        <thead>
            <tr align="center">
                <td><b>ID</b></td>
                <td><b>新闻标题</b></td>
                <td><b>新闻类型</b></td>
            </tr>
            @foreach($gets as $v)
                <tr align="center">
                    <td>{{$v->j_id}}</td>
                    <td>{{$v->j_name}}</td>
                    <td>{{$v->j_names}}</td>
                    <td>    
                        <a href="{{url('/polt/del/'.$v->j_id)}}" class="btn btn-danger">删除</a>
                    </td>
                </tr>
            @endforeach
            <td colspan="6" align="center">
                {{$gets->links()}}
            </td>
    </table>
</body>
    <!--  -->
</html>

