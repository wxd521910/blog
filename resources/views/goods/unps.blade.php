

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
    <h3 align="center">员工修改</h3><hr/>
    <form class="form-horizontal" role="form" action="{{url('goods/unps'.$firsts->brand_id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">员工姓名</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="firstname" value="{{$firsts->brand_name}}" name="brand_name"placeholder="请输入商品名称">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">员工号</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="firstname" value="{{$firsts->brand_price}}" name="brand_price"placeholder="请输入商品价格">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">员工头像</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="firstname" name="brand_log" placeholder="请输入名字">
            <img src="{{env('UPLOAD_URL')}}{{$firsts->brand_log}}" alt="" while="100px" height="140px">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">员工部门</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="lastname" value="{{$firsts->brand_desc}}" name="brand_desc" placeholder="请输入描述信息">
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">修改</button>
        </div>
    </div>
    </form>
</body>
</html>