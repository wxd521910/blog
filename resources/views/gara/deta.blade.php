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
    
    <h3 align="center">车库详情管理</h3><hr/>
    <div align="center">
        当前浏览量{{$current}}
    </div>
    <form class="form-horizontal" role="form" action="{{url('gara/message'.$gets->gara_id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">用户昵称</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="gara_name" value="{{$gets->gara_name}}" placeholder="请输入用户昵称">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">时间</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="gara_thim" value="{{$gets->gara_thim}}" >
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">留言板</label>
        <div class="col-sm-10">
            <textarea name="gara_message" rows="10px"  placeholder="请输入留言内容" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">提交留言</button>
        </div>
    </div>
    </form>
</body>

</html>
