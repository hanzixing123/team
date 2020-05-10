<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Login;
//表单验证
use App\Http\Requests\StoreUser;
class UserControllerL extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $add=Login::paginate(3);
        return view("/Admin/login/user_show",["add"=>$add]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("/Admin/login/user");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        //Login
        $name=request()->except("_token");
        if(count($name)==4){
            if($name["user_pan"]!=="zhao"){
                return redirect("/user/add")->with("git","输入注册密码有误！");
            }
        }
        $where=[
            "user_name"=>$name["user_name"],
            "user_pwd"=>$name["user_pwd"],
            "user_del"=>$name["user_del"],
        ];
        $data=Login::insert($where);
        if($data){
            return redirect("/user/index");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $name=Login::where("user_id","=",$id)->first();
        $name["user_pwd"]=decrypt($name["user_pwd"]);
        if($name["user_del"]=="1"){
            return view("/Admin/login/dupdate",["name"=>$name]);
        }
        // dd($name["user_del"]);
        return view("/Admin/login/update",["name"=>$name]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $name=request()->except("_token");
        $name["user_pwd"]=encrypt($name["user_pwd"]);
        $data=Login::where("user_id","=",$id)->update($name);
        if($data){
            return redirect("/user/index");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $name=Login::where("user_id","=",$id)->delete();
        if($name){
            return redirect("/user/index");
        }
    }
}
