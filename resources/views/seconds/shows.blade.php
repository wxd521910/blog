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
        <h3 align="center">学生数据展示</h3><hr/>
        <thead>
       
            <tr align="center">
                <td><b>ID</b></td>
                <td><b>学生名字</b></td>
                <td><b>性别</b></td>
                <td><b>班级</b></td>
                
                <td><b>操作</b></td>
            </tr>
            @foreach($gets as $v)
                <tr align="center">
                    <td>{{$v->s_id}}</td>
                    <td>{{$v->s_name}}</td>
                    <td>{{$v->s_sex}}</td>
                    <td>{{$v->s_class}}</td>
                    <td>
                        <a href="{{url('seconds/unp'.$v->s_id)}}" class="btn btn-info">修改</a>
                        <a href="{{url('seconds/del'.$v->s_id)}}" class="btn btn-danger">删除</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>