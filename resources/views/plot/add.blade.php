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
    <h3 align="center">楼盘添加</h3><hr/>

    <form class="form-horizontal" role="form" action="{{url('polt/adds')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">小区名字</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="plot_name" placeholder="请输入小区名字">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">地理位置</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="plot_place" placeholder="请输入地理位置">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">面积</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="plot_area" placeholder="请输入面积">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">导购员</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="plot_names" placeholder="请输入导购员">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">联系电话</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="plot_phone" placeholder="请输入联系电话">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">楼盘主图</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="firstname" name="plot_log">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">楼盘相册</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" multiple="multiple" id="firstname" name="plot_logs[]">
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