<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/',function () {
//     return view('welcome');
// });

Route::get('/','Admin\IndexController@index');//首页

Route::get('/login','Admin\LoginController@login');//登录
Route::any('/logindes','Admin\LoginController@logindes');//登录显示
//->middleware('islogin')
Route::prefix("/custom")->middleware('islogin')->group(function(){
	Route::get('/add','Admin\CustomController@create');//客户添加
	//Route::get('create',"Admin\CustomController@create"); //添加页面
	Route::post("store","Admin\CustomController@store")->name('chong');  //执行添加方法
	Route::get("/","Admin\CustomController@index");  //执行展示页面
	Route::get("destroy/{id}","Admin\CustomController@destroy"); //删除
	Route::get("edit/{id}","Admin\CustomController@edit"); //修改
	Route::post("update/{id}","Admin\CustomController@update")->name('zi'); //执行修改
});//
Route::prefix("/visit")->middleware('islogin')->group(function(){
	Route::get('/add','Admin\VisitController@create');//客户添加
	//Route::get('create',"Admin\VisitController@create"); //添加页面
	Route::post("store","Admin\VisitController@store");  //执行添加方法
	Route::get("/","Admin\VisitController@index");  //执行展示页面
	Route::get("destroy/{id}","Admin\VisitController@destroy"); //删除
	Route::get("edit/{id}","Admin\VisitController@edit"); //修改
	Route::post("update/{id}","Admin\VisitController@update"); //执行修改
});
//->middleware('islogin')
Route::prefix("/salesman")->middleware('islogin')->group(function(){
	Route::get('/add','Admin\SalesmanController@create');//客户添加
	Route::post("store","Admin\SalesmanController@store");  //执行添加方法
 	Route::get('create',"Admin\SalesmanController@create"); //添加页面
	Route::get("/","Admin\SalesmanController@index");  //执行展示页面
	Route::get("destroy/{id}","Admin\SalesmanController@destroy"); //删除
	Route::get("edit/{id}","Admin\SalesmanController@edit"); //修改
	Route::post("update/{id}","Admin\SalesmanController@update"); //执行修改
});
Route::prefix("/recycle")->middleware('islogin')->group(function(){
	Route::any("/","Admin\RecycleController@index");  //执行展示页面
	Route::any("/reds","Admin\RecycleController@reds");  //k了可见度发挥
});
Route::prefix("/user")->middleware("islogin")->group(function(){
	Route::any("/add","Admin\UserControllerL@create");
	Route::any("/store","Admin\UserControllerL@store");
	Route::any("/destroy/{id}","Admin\UserControllerL@destroy");
	Route::any("/edit/{id}","Admin\UserControllerL@edit");
	Route::any("/update/{id}","Admin\UserControllerL@update");
	Route::any("/index","Admin\UserControllerL@index");
});



