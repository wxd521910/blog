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
            <a href="{{url('edible/add')}}">添加</a>
        </h3>
        <thead>
            <tr align="center">
                <td><b>ID</b></td>
                <td><b>商品名称</b></td>
                <td><b>商品品牌</b></td>
                <td><b>商品图片</b></td>
            </tr>
            @foreach($selects as $v)
                <tr align="center">
                    <td>{{$v->e_id}}</td>
                    <td>{{$v->e_name}}</td>
                    <td>{{$v->e_names}}</td>
                    <td>
                        <img src="{{env('UPLOAD_URL')}}{{$v->e_log}}" alt=""  height="40px">
                    </td>
                    <td>    
                        <a href="{{url('/edible/del/'.$v->e_id)}}" class="btn btn-danger">删除</a>
                    </td>
                </tr>
            @endforeach
            <td colspan="12" align="center">
                {{$selects->links()}}
            </td>
    </table>
</body>
</html>
<script>
    // ajx的分页
    $(document).on('click','.pagination a',function(){
        var url = $(this).attr('href');
        $.get(url,function(ajaxshow){
            $('body').html(ajaxshow);
        });
        return false;
    });
</script>
