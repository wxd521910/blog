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
    <h3 align="center">员工添加</h3><hr/>
    <form class="form-horizontal" role="form" action="{{url('goods/adds')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">员工名称</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="brand_name"placeholder="请输入商品名称">
            <!-- 展示错误 -->
            <b style="color:red">{{$errors->first('brand_name')}}</b>
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">员工号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="brand_price"placeholder="请输入商品价格">
            <b style="color:red">{{$errors->first('brand_price')}}</b>
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">员工头像</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="firstname" name="brand_log" placeholder="请输入名字">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">部门</label>
        <div class="col-sm-10">
       
        <select name="brand_desc" class="form-control" id="lastname">
            <option value="技术部" selected>技术部</option>
            <option value="产品部">产品部</option>
        </select>

        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">添加</button>
        </div>
    </div>
    </form>
</body>
</html>