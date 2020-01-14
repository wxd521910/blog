<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>库管员车库管理数据展示</title>
</head>
<body>
    <table class="table">
    @csrf
        <h3 align="center">库管员车库管理数据展示</h3>
        <div align="center">
        <thead>
            <tr align="center">
                <td><b>ID</b></td>
                <td><b>用户昵称</b></td>
                <td><b>用户身份</b></td>
                <td><b>入库时间</b></td>
                <td><b>操作</b></td>
            </tr>
            @foreach($gets as $v)
                <tr align="center">
                    <td>{{$v->gara_id}}</td>
                    <td>{{$v->gara_name}}</td>
                    <td>没有权限查看</td>
                    <td>{{$v->gara_thim}}</td>
                    <td>
                        <a href="javascript:;" class="btn btn-info">没有权限执行操作</a>
                    </td>
                </tr>
            @endforeach
           
        </tbody>
    </table>
</body>
</html>