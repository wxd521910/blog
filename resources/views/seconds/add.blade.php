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
    <h3 align="center">学生添加</h3><hr/>
    <form class="form-horizontal" role="form" action="{{url('seconds/indexs')}}" method="post">
        @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">姓名</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="firstname"  name="s_name"placeholder="请输入商品名称">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">性别</label>
        <div class="col-sm-10">
            <input type="radio" name="s_sex" value="男" checked>男
            <input type="radio" name="s_sex" value="女">女
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">班级</label>
        <div class="col-sm-10">
            <select name="s_class" class="form-control" >
                <option value="-请选择班级-" selected>-请选择班级-</option>
                <option value="1906PHPA">1906PHPA</option>
                <option value="1906PHPB">1906PHPB</option>
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