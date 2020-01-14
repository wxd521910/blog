<body>
    <table class="table">
        <h3 align="center">后台数据展示</h3>
        <h3 align="center">
            <a href="{{url('edible/add')}}">添加</a>
        </h3>
        <thead>
            <tr align="center">
                <td><b>ID</b></td>
                <td><b>商品名称</b></td>
                <td><b>商品图片</b></td>
            </tr>
            @foreach($selects as $v)
                <tr align="center">
                    <td>{{$v->e_id}}</td>
                    <td>{{$v->e_name}}</td>
                    <td>
                        <img src="{{env('UPLOAD_URL')}}{{$v->e_log}}" alt=""  height="40px">
                    </td>
                    <td>    
                        <a href="{{url('edible/del'.$v->e_id)}}" class="btn btn-danger">删除</a>
                    </td>
                </tr>
            @endforeach
            <td colspan="12" align="center">
                {{$selects->links()}}
            </td>
    </table>
</body>