<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学生添加视图</title>
</head>
<body>
    <form method="post" action="{{url('/store')}}">
        @csrf
        <table border="1" align="center">
            <tr>
                <td>学生名字</td>
                <td>
                    <input type="text" name="a" id="">
                </td>
            </tr>
            <tr>
                <td>班级</td>
                <td>
                    <input type="text" name="b" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="提交">
                </td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>