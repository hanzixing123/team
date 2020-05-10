<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Login;
use Illuminate\Support\Facades\Cookie;
class LoginController extends Controller
{
	public function login(){

		return view('admin.login.create');

	}
    public function logindes(Request $request){
    	$login=$request->except('_token');
    	//两种加密结果
    	//dump(encrypt('123'));//1
    	//dd(encrypt('123'));  //2
    	$adminuser=Login::where('user_name',$login['user_name'])->first();
    	//dd($adminuser);
    	//dd(decrypt($adminuser->pwd));//解密
    	if(decrypt($adminuser->user_pwd) !== $login['user_pwd']){
    		return redirect('/login')->with('msg','用户名或密码不对，请重新输入');
    	}
        // dd($login);
    	session(['adminuser'=>$adminuser]);
    	return redirect('/salesman/create');
   
}
}
