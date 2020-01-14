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
            <a href="{{url('polt/add')}}">添加</a>
        </h3>
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
        <thead>
            <tr align="center">
                <td><b>ID</b></td>
                <td><b>小区名字</b></td>
                <td><b>地理位置</b></td>
                <td><b>面积</b></td>
                <td><b>导购员</b></td>
                <td><b>联系电话</b></td>
                <td><b>楼盘主图</b></td>
                <td><b>楼盘相册</b></td>
                <td><b>操作</b></td>
            </tr>
            @foreach($ins as $v)
                <tr align="center">
                    <td>{{$v->plot_id}}</td>
                    <td>{{$v->plot_name}}</td>
                    <td>{{$v->plot_place}}</td>
                    <td>{{$v->plot_area}}</td>
                    <td>{{$v->plot_names}}</td>
                    <td>{{$v->plot_phone}}</td> 
                    <td>
                        <img src="{{env('UPLOAD_URL')}}{{$v->plot_log}}" alt=""  height="40px">
                    </td>
                    <td>
                        @if($v->plot_logs)
                            @foreach ($v->plot_logs as $vv)
                                <img src="{{env('UPLOAD_URL')}}{{$vv}}" alt=""  height="40px">
                            @endforeach
                        @endif
                    </td>
                    <td>    
                        <a href="{{url('/polt/del/'.$v->plot_id)}}" class="btn btn-danger">删除</a>
                    </td>
                </tr>
            @endforeach
    </table>
</body>
</html>

