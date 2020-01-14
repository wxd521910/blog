<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <h3 align="center">新闻添加</h3><hr/>
    <h3 align="center">
            <a href="{{url('journ/show')}}">列表展示</a>
    </h3><hr/>
    <form class="form-horizontal" role="form" action="{{url('journ/indexs')}}" method="post">
        @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">新闻标题</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"  name="j_name" value="{{session('data')['j_name']}}" placeholder="请输入商品名称">
            <b style="color:red">{{$errors->first('j_name')}}</b>
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">新闻类型</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"  name="j_names" value="{{session('data')['j_names']}}" placeholder="请输入新闻作者">
            <b style="color:red">{{$errors->first('j_names')}}</b>
        </div>
    </div>
    <!-- <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">发布时间</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" value="{{session('data')['j_time']}}" name="j_time"placeholder="请输入发布时间">
            <b style="color:red">{{$errors->first('j_time')}}</b>
        </div>
    </div> -->
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">添加</button>
        </div>
    </div>
    </form>
</body>
</html>