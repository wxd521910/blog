<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//闭包路由
Route::get('/', function () {
    return view('welcome');
});

//返回字符串
Route::get('/wxd', function () {
    return '吴晓东';
});

//返回视图
Route::get('/akk', function () {
    return view('akk');
});

//控制器路由
Route::get('/aa','indexcontroller@text');
//路由视图
Route::view('/bb','akk',['name'=>"晓东"]);
//登陆的视图路由
Route::view('/login','login');
//登陆操作
Route::post('/logins','indexcontroller@login');
// Route::post('/logins','indexcontroller@login');
//路由参数
//必选参数-->如果要是闭包路由的话，直接在访问的方法的名字后面加上中口号里面写上id，然后在function里面调用一下，调用的时候名字可以不一样
Route::get('/akks/{id}', function ($id) {
    echo "$id";
})->where('id', '[0-9]+');
//必选
// Route::get('/akkas/{id}','Student@text');
Route::get('/akkas/{id}','Student@text')->where('id','[0-9]+');
//表单
Route::get('/add','admin\Goods@add');

// ----------------------------------------------------------------------------------------------------------------------------------------
//商品
Route::get('goods/add','admin\Goods@add');          // 添加页面展示
Route::post('goods/adds','admin\Goods@adds');       // 执行添加
Route::get('goods/show','admin\Goods@show');        // 列表展示
Route::get('goods/del{id}','admin\Goods@del');      // 删除
Route::get('goods/unp{id}','admin\Goods@unp');      // 修改页面
Route::post('goods/unps{id}','admin\Goods@unps');   // 执行修改
// -------------------------------------------------------------------------------------------------------------------------------------------
//第一次周考考试
// Route::get('/list','Student@index');    //  学生展示
// Route::get('/create','Student@add');    // 视图展示
// Route::post('/store','Student@adds');   // 执行添加
// -------------------------------------------------------------------------------------------------------------------------------------------
// 第二次月测考试
Route::get('seconds/index','admin\Seconds@index');         //添加视图
Route::post('seconds/indexs','admin\Seconds@indexs');      //执行添加
Route::get('seconds/show','admin\Seconds@show');           //列表展示
Route::get('seconds/del{id}','admin\Seconds@del');         //删除
Route::get('seconds/unp{id}','admin\Seconds@unp');         //修改
Route::post('seconds/unps{id}','admin\Seconds@unps');      //修改
// -------------------------------------------------------------------------
// 图书
Route::get('bookss/index','admin\bookss@index');            //添加视图
Route::post('bookss/indexs','admin\bookss@indexs');         //执行添加
Route::get('bookss/show','admin\bookss@show');              //数据展示
// -------------------------------------------------------------------------------------------------------------------------------------------
//新闻表
Route::get('journ/index','admin\JournController@index');            //添加视图
Route::post('journ/indexs','admin\JournController@indexs');         //执行添加
Route::get('journ/show','admin\JournController@show');              //列表展示
// Route::get('journ/ajaxshow','admin\JournController@ajaxshow');              //ajax列表展示


// -------------------------------------------------------------------------------------------------------------------------------------------
// 文章
Route::get('essay/add','admin\EssayController@add');                //添加视图
Route::post('essay/adds','admin\EssayController@adds');             //执行添加
Route::get('essay/show','admin\EssayController@show');              //展示
Route::get('essay/del{id}','admin\EssayController@del');            //删除
// -------------------------------------------------------------------------------------------------------------------------------------------
// 好吃的
Route::get('edible/add','admin\EdibleController@add');                  //添加视图
Route::post('edible/adds','admin\EdibleController@adds');               //执行添加
Route::get('edible/show','admin\EdibleController@show');                //展示
Route::get('/edible/del/{id}','admin\EdibleController@del');            //删除
Route::get('/edible/ajaxsole','admin\EdibleController@ajaxsole');       //验证唯一性
// -------------------------------------------------------------------------------------------------------------------------------------------
// 楼盘
Route::get('polt/add','admin\PlotController@add');                  //添加视图
Route::post('polt/adds','admin\PlotController@adds');               //执行添加
Route::get('polt/show','admin\PlotController@show');                //展示
Route::get('/polt/del/{id}','admin\PlotController@del');            //删除
// -------------------------------------------------------------------------------------------------------------------------------------------
//车库管理
Route::get('gara/adminviews','admin\GaraController@adminviews')->middleware('checkLogin');              //管理登陆视图
Route::post('gara/addadmin','admin\GaraController@addadmin')->middleware('checkLogin');                 //执行管理登陆视图
Route::get('gara/adminshow','admin\GaraController@adminshow')->middleware('checkLogin');                //主管展示页面
Route::get('gara/deta/{id}','admin\GaraController@deta')->middleware('checkLogin');                     //主管展示详情页面
Route::post('gara/message{id}','admin\GaraController@message')->middleware('checkLogin');               //执行主管展示留言
Route::get('gara/admindel/{id}','admin\GaraController@admindel')->middleware('checkLogin');             //主管展示删除

Route::get('gara/storeshow','admin\GaraController@storeshow')->middleware('checkLogin');                //库管员展示页面
Route::get('gara/login','admin\GaraController@login');                                                  //登陆页面
Route::post('gara/logins','admin\GaraController@logins');                                               //执行登陆
