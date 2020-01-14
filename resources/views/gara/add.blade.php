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
    <h3 align="center">车库管理添加</h3><hr/>
    <form class="form-horizontal" role="form" action="{{url('gara/addadmin')}}" method="post" enctype="multipart/form-data">
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
        <label for="lastname" class="col-sm-2 control-label">用户身份</label>
        <div class="col-sm-10">
            <select name="gara_admin" class="form-control" id="lastname">
                <option value="0" selected>-请选择用户的管理身份-</option>
                <option value="1">主管</option>
                <option value="2">库管员</option>
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
