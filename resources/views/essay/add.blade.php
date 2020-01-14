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
    <h3 align="center">文章添加</h3><hr/>
    <form class="form-horizontal" role="form" action="{{url('essay/adds')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">文章标题</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"name="e_name"placeholder="请输入文章标题">
            <b style="color:red">{{$errors->first('e_name')}}</b>
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">文章作者</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"  name="e_names"placeholder="请输入文章作者">
            <b style="color:red">{{$errors->first('e_names')}}</b>            
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">作者email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="e_email"placeholder="请输入作者email">
            <b style="color:red">{{$errors->first('e_email')}}</b>  
        </div>
    </div> 
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">文章的重要性</label>
        <div class="col-sm-10">
            <input type="radio" name="e_sign" checked value="普通">普通
            <input type="radio" name="e_sign" value="顶置">顶置
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">是否显示</label>
        <div class="col-sm-10">
            <input type="radio" name="e_show" value="否" checked>否
            <input type="radio" name="e_show" value="是">是
        </div>
    </div>
    <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">文章分类</label>
    <div class="col-sm-10">
        <select name="e_class" class="form-control" id="firstname">
            <option value="0" selected>请选择分类</option>
            <option value="新闻">新闻</option>
            <option value="恋爱">恋爱</option>
        </select>
    </div>
    </div> 
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">关键字</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="e_keyw"placeholder="请输入关键字">
            <b style="color:red">{{$errors->first('e_keyw')}}</b>  
        </div>
    </div> 
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">网页描述</label>
        <div class="col-sm-10">
            <textarea name="e_descr" rows="10px" cols=40px" placeholder="请输入网页描述"></textarea>
            <b style="color:red">{{$errors->first('e_descr')}}</b>  
        </div>
    </div> 
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">上传文件</label>
        <div class="col-sm-10">
            <input type="file" name="e_log" id="" class="form-control" id="firstname">
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



