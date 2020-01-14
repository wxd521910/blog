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
    <h3 align="center">图书</h3><hr/>
    <form class="form-horizontal" role="form" action="{{url('bookss/indexs')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">图书姓名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"name="b_name"placeholder="请输入图书姓名">
            <b style="color:red">{{$errors->first('b_name')}}</b>
        </div>
    </div>

	
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">作者</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"  name="b_names"placeholder="请输入作者">
            <b style="color:red">{{$errors->first('b_names')}}</b>
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">售价</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"  name="b_price"placeholder="请输入售价">
        </div>
    </div> 
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">图书封面</label>
        <div class="col-sm-10">
            <input type="file" name="b_log" id="" class="form-control" id="firstname">
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



