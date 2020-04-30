<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Salesman;//   
use App\Custom;
use App\Http\Requests\CustomPost;//验证表单
use Validator;//第三种
use Illuminate\Validation\Rule;//第三种
class CustomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $Salesman=Salesman::all();

//leftJoin('custom b','visit.cust_id','=','b. cust_id')

      $Custom=Custom::join('Salesman','salesman.sale_id','=','custom.sale_id')->get();

        return view('admin.custom.index',['Salesman'=>$Salesman,'Custom'=>$Custom]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $res=Salesman::all();
        return view('admin.custom.add',['res'=>$res]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomPost $request)
    {
        //
        $zhi=request()->except('_token');
        $res= Custom::insert($zhi);
        if($res){
           return redirect('custom/');  
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
      // $res=Custom::where('cust_id',$id)->get();
        $res=Custom::find($id);
        $Salesman=Salesman::all();
       //dd($res);
       return view('admin.custom.edit',['res'=>$res,'Salesman'=>$Salesman]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomPost $request, $id)
    {
        //  
        $zhi=request()->except('_token');                          
         $res=Custom::where("cust_id",$id)->update($zhi);
         if($res!==false){
            return redirect("/custom");    
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

        $Custom =Custom::destroy($id);
        if($Custom){
            echo "1";
        }

    }
}
