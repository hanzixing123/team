<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Salesman;//   
use App\Custom;
use App\Visit;
 use App\Http\Requests\VisitPost;//验证表单
class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visit=Visit::leftjoin('salesman','salesman.sale_id','=','visit.sale_id')
        ->leftjoin('custom','custom.cust_id','=','visit.cust_id')->get();
        //dd($visit);
        return view('admin.visit.index',['visit'=>$visit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    $Salesman=Salesman::all();
    $Custom=  Custom::all();
        return view('admin.visit.add',['Salesman'=>$Salesman,'Custom'=>$Custom]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisitPost $request)
    {
        //
             $zhi=request()->except('_token');
            $zhi['vis_time']=time();
            $zhi['vis_uptime']=time()+10000000;
           // dd($zhi);
            $res= Visit::insert($zhi);
        if($res){
           return redirect('visit/');  
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
          $res=Visit::find($id);
         // dd($res);
        $Salesman=Salesman::all();
        $Custom=Custom::all();
       //dd($res);
       return view('admin.visit.edit',['res'=>$res,'Salesman'=>$Salesman,'Custom'=>$Custom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VisitPost $request, $id)
    {
        //     

         $zhi=request()->except('_token');                          
         $res=Visit::where("vis_id",$id)->update($zhi);
         if($res!==false){
            return redirect("/visit");    
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
         $visit =Visit::destroy($id);
        if($visit){
            echo "1";
        }
    }
}
