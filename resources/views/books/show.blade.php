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
        <h4 align="center">
            <a href="{{url('bookss/index')}}">图书添加</a>
        </h4><hr/>
        
        <div align="center">
            <form action="" method="get">
                <input type="text" name="b_name" id="" placeholder="请搜索图片名字" value="{{$query['b_name']??''}}">
                <input type="submit" value="搜索">
            </form>
        </div><hr/>
        <thead>
            <tr align="center">
                <td><b>ID</b></td>
                <td><b>图书名字</b></td>
                <td><b>图书作者</b></td>
                <td><b>图书封面</b></td>
                <td><b>售价</b></td>
                
            </tr>
            @foreach($selects as $v)
                <tr align="center">
                    <td>{{$v->b_id}}</td>
                    <td>{{$v->b_name}}</td>
                    <td>{{$v->b_names}}</td>
                    <td>
                        <img src="{{env('UPLOAD_URL')}}{{$v->b_log}}" alt="" while="20px" height="40px">
                        
                    </td>
                    <td>{{$v->b_price}}</td>
                    
                </tr>
            @endforeach
            <tr>
                <td colspan="6">
                    {{$selects->appends($query??'')->links()}}
                  
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
