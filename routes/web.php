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


Route::prefix("/custom")->group(function(){
	Route::get('/add','Admin\CustomController@create');//客户添加
	Route::get('create',"Admin\CustomController@create"); //添加页面
	Route::post("store","Admin\CustomController@store");  //执行添加方法
	Route::get("/","Admin\CustomController@index");  //执行展示页面
	Route::get("destroy/{id}","Admin\CustomController@destroy"); //删除
	Route::get("edit/{id}","Admin\CustomController@edit"); //修改
	Route::post("update/{id}","Admin\CustomController@update"); //执行修改
});
Route::prefix("/visit")->group(function(){
	Route::get('/add','Admin\VisitController@create');//客户添加
	Route::get('create',"Admin\VisitController@create"); //添加页面
	Route::post("store","Admin\VisitController@store");  //执行添加方法
	Route::get("/","Admin\VisitController@index");  //执行展示页面
	Route::get("destroy/{id}","Admin\VisitController@destroy"); //删除
	Route::get("edit/{id}","Admin\VisitController@edit"); //修改
	Route::post("update/{id}","Admin\VisitController@update"); //执行修改
});
Route::prefix("/salesman")->group(function(){
	Route::get('/add','Admin\SalesmanController@create');//客户添加
	Route::get('create',"Admin\SalesmanController@create"); //添加页面
	Route::post("store","Admin\SalesmanController@store");  //执行添加方法
	Route::get("/","Admin\SalesmanController@index");  //执行展示页面
	Route::get("destroy/{id}","Admin\SalesmanController@destroy"); //删除
	Route::get("edit/{id}","Admin\SalesmanController@edit"); //修改
	Route::post("update/{id}","Admin\SalesmanController@update"); //执行修改
});



