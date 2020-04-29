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
	


});

