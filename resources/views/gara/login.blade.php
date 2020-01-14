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
    <h3 align="center">登陆</h3><hr/>
    <h3 align="center">{{session('erro')}}</h3><hr/>
    <form class="form-horizontal" role="form" action="{{url('gara/logins')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">用户昵称</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="gara_name" placeholder="请输入用户昵称">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="firstname" name="gara_pwd" placeholder="请输入用户密码">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">登陆</button>
        </div>
    </div>
    </form>
</body>

</html>
