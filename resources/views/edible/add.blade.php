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
    <h3 align="center">商品添加</h3>
    <h3 align="center">
        <a href="{{url('edible/show')}}">数据展示</a>
    </h3><hr/>
    
    <form class="form-horizontal" role="form" action="{{url('edible/adds')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">商品名称</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"name="e_name"placeholder="请输入商品名称">
            <b style="color:red"></b>
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">商品品牌</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"name="e_names"placeholder="请输入商品品牌">
            <b style="color:red"></b>
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
            
            <button type="button" class="btn btn-default">添加</button>
        </div>
    </div>
    </form>
</body>
    <script>
        // js验证
        // 验证商品名称
        // 获取input的框的name属性
        $('input[name="e_name"]').blur(function(){
            // 验证错误时候，写对时候还会出现，这个是用来解决那个问题的
            $('input[name="e_name"]').next().text('');
            // 获取值
            var e_name = $('input[name="e_name"]').val();
            // 引用商品名称的方法
            ename(e_name);
        });
        //验证商品名称的方法
        function ename(e_name){
            var flag = true;
            // 正则验证
            var reg = /^[\u4e00-\u9fa5\w.\-]{1,16}$/;   
            // 判断是否执行正则
            // test是做验证的   看一下是否执行验证
            // return,是终止执行
            // next是获取下一个属性
            if(!reg.test(e_name)){
                $('input[name="e_name"]').next().text('商品必须是中文，数字下划线，点和数组长度1-16位');
                return false;
            }
            $.ajax({
                method:'get',
                url:"/edible/ajaxsole",
                data:{e_name:e_name},
                async:false,
            }).done(function(red){
                if(red!=0){
                    $('input[name="e_name"]').next().text('商品名称已存在');
                    flag = false;
                }
            });
               return flag;
        }
        // 验证品牌
        $('input[name="e_names"]').blur(function(){
            // 验证错误时候，写对时候还会出现，这个是用来解决那个问题的
            $('input[name="e_names"]').next().text('');
            // 获取值
            var e_names = $('input[name="e_names"]').val();
            //引入验证品牌的方法
            names(e_names)
        });
        // 验证品牌的方法
        function names(e_names){
            flag = true;
            // 正则验证
            var reg = /^[\u4e00-\u9fa5\w.\-]{1,16}$/;   
            // 判断是否执行正则
            // test是做验证的   看一下是否执行验证
            // return,是终止执行
            // next是获取下一个属性
            if(!reg.test(e_names)){
                $('input[name="e_names"]').next().text('品牌必须是中文，数字下划线，点和数组长度1-16位');
                flag = false;
            }
            return flag;
        }

        //阻止提交
        $('[type="button"]').click(function(){
             // 验证商品名称
           
                // 验证错误时候，写对时候还会出现，这个是用来解决那个问题的
                $('input[name="e_name"]').next().text('');
                // 获取值
                var e_name = $('input[name="e_name"]').val();
                // 引用商品名称的方法
                var nameflag = ename(e_name);
           
         
                // 验证错误时候，写对时候还会出现，这个是用来解决那个问题的
                $('input[name="e_names"]').next().text('');
                // 获取值
                var e_names = $('input[name="e_names"]').val();
                //引入验证品牌的方法
                var nameflags = names(e_names)

                if(nameflag==true && nameflags==true){
                    $('form').submit();
                }
                
            });
       
    </script>
</html>




