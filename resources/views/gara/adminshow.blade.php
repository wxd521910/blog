<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>主管车库管理数据展示</title>
</head>
<body>
    <table class="table">
    @csrf
        <h3 align="center">主管车库管理数据展示</h3><hr/>
        <div align="center">
        当前页面浏览
            @php 
                $mem = new Memcache;
                // 测试链接是否成功
                $mem->connect('127.0.0.1',11211) or die('memcache connect fail');
                $mem->add('nianling',0);
                $aa = $mem ->increment('nianling',1); //
                $bb = $mem->get('nianling');  //  执行
                echo "$bb 次";
            @endphp
        </div><hr/>
        <div align="center">
          <form action="" method="get">                                                          <!-- 搜索条件保留的 -->
            <input type="text" name="gara_name" placeholder="请输入用户昵称" value="{{$query['gara_name']??''}}">
            <input type="submit" value="搜索">
          </form>
        </div><hr/>
        <thead>
            <tr align="center">
                <td><b>ID</b></td>
                <td><b>用户昵称</b></td>
                <td><b>用户身份</b></td>
                <td><b>入库时间</b></td>
                <td><b>留言</b></td>
                <td><b>操作</b></td>
            </tr>
            @foreach($gets as $v)
                <tr align="center">
                    <td>{{$v->gara_id}}</td>
                    <td>{{$v->gara_name}}</td>
                    <td>@if($v->gara_admin==1) 主管 @else 库管员 @endif</td>
                    <td>{{$v->gara_thim}}</td>
                    <td>{{$v->gara_message}}</td>
                    <td>
                        <a href="{{url('gara/admindel/'.$v->gara_id)}}" class="btn btn-info">删除</a>
                        <a href="{{url('gara/deta/'.$v->gara_id)}}" class="btn btn-info">详情</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>