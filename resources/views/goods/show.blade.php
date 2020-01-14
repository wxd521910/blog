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
            <a href="{{url('goods/add')}}">学生添加</a>
        </h4><hr/>
        
        <div align="center">
          <form action="" method="get">                                                          <!-- 搜索条件保留的 -->
            <input type="text" name="g_name" placeholder="请输入商品名称" value="{{$query['g_name']??''}}">
            <input type="submit" value="搜索">
          </form>
        </div><hr/>
        <thead>
            <tr align="center">
                <td><b>ID</b></td>
                <td><b>员工姓名</b></td>
                <td><b>员工头像</b></td>
                <td><b>员工部门</b></td>
                <td><b>员工号</b></td>
                <td><b>操作</b></td>
            </tr>
            @foreach($gets as $v)
                <tr align="center">
                    <td>{{$v->brand_id}}</td>
                    <td>{{$v->brand_name}}</td>
                    <td>
                        <img src="{{env('UPLOAD_URL')}}{{$v->brand_log}}" alt="" while="20px" height="40px">
                    </td>
                    <td>{{$v->brand_desc}}</td>
                    <td>{{$v->brand_price}}</td>
                    <td>
                        <a href="{{url('goods/unp'.$v->brand_id)}}" class="btn btn-info">修改</a>
                        <a href="{{url('goods/del'.$v->brand_id)}}" class="btn btn-danger">删除</a>
                    </td>
                </tr>
            @endforeach
           
        </tbody>
    </table>
</body>
</html>