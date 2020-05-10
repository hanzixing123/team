<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Salesman;
use App\Http\Requests\SelsmanStrout;
class SalesmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesman=Salesman::orderBy('sale_id',"desc")->paginate(2);
        return view('admin.salesman.index',['sale'=>$salesman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.salesman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SelsmanStrout $request)
    {

        $post=request()->except(['_token']);
        //表单验证
      

      $res=Salesman::insert($post);
        if($res){
            return redirect('/salesman');
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
        $salesman=Salesman::find($id);
        return view('admin.salesman.edit',['sale'=>$salesman]);
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
        $post=$request->except(['_token',"/salesman/update/".$id]);
        $res=Salesman::where('sale_id',$id)->update($post);  //2
        //dd($res);
        if($res!==false){
            return redirect('/salesman');
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
        $res=Salesman::destroy($id);
        if($res){
            return redirect("/salesman");
        }
    }
}
