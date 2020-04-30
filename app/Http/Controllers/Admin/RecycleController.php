<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//客户
use App\Custom;
//访问
use App\VisitModel;
class RecycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $all=request()->all();
        $where=[];
        if(count($all)){
            if(isset($all["cust_nam"])){
                $where[]=["cust_name","like","%".$all["cust_nam"]."%"];
            }
            if(isset($all["cust_rank"])){
                $where[]=["cust_rank","like","%".$all["cust_rank"]."%"];
            }
            if(isset($all["cust_pursue"])){
                $where[]=["cust_pursue","like","%".$all["cust_pursue"]."%"];
            }
            if(isset($all["cust_from"])){
                $where[]=["cust_from","like","%".$all["cust_from"]."%"];
            }
            if(isset($all["sale_name"])){
                $where[]=["sale_name","like","%".$all["sale_name"]."%"];
            }
            if(isset($all["sale_sex"])){
                $where[]=["sale_sex","like","%".$all["sale_sex"]."%"];
            }
            if(isset($all["sale_phone"])){
                $where[]=["sale_phone","like","%".$all["sale_phone"]."%"];
            }
            if(isset($all["sale_tel"])){
                $where[]=["sale_tel","like","%".$all["sale_tel"]."%"];
            }
            if(isset($all["cust_phone"])){
                $where[]=["cust_phone","like","%".$all["cust_phone"]."%"];
            }
            if(isset($all["cust_tel"])){
                $where[]=["cust_tel","like","%".$all["cust_tel"]."%"];
            }
        }
        $recycle = Custom::where($where)->leftJoin('salesman','salesman.sale_id','=','salesman.sale_id')->paginate(3);
        if(request()->ajax()){
            return view("/Admin/recycle/ajaxrecycle",["recycle"=>$recycle,"all"=>$all]);
        }
        return view("/Admin/recycle/recycle",["recycle"=>$recycle,"all"=>$all]);
    }
    /**
    ***
    ***客服客户拜访信息
    ***
    **/
    public function reds(){
        $all=request()->all();
        $where=[];
        if(count($all)){
            if(isset($all["sale_name"])){
                $where[]=["sale_name","like","%".$all["sale_name"]."%"];
            }
            if(isset($all["sale_sex"])){
                $where[]=["sale_sex","like","%".$all["sale_sex"]."%"];
            }
            if(isset($all["sale_phone"])){
                $where[]=["sale_phone","like","%".$all["sale_phone"]."%"];
            }
            if(isset($all["sale_tel"])){
                $where[]=["sale_tel","like","%".$all["sale_tel"]."%"];
            }
            if(isset($all["cust_name"])){
                $where[]=["cust_name","like","%".$all["cust_name"]."%"];
            }
            if(isset($all["cust_rank"])){
                $where[]=["cust_rank","like","%".$all["cust_rank"]."%"];
            }
            if(isset($all["cust_from"])){
                $where[]=["cust_from","like","%".$all["cust_from"]."%"];
            }
            if(isset($all["cust_phone"])){
                $where[]=["cust_phone","like","%".$all["cust_phone"]."%"];
            }
            if(isset($all["cust_tel"])){
                $where[]=["cust_tel","like","%".$all["cust_tel"]."%"];
            }
            if(isset($all["vis_name"])){
                $where[]=["vis_name","like","%".$all["vis_name"]."%"];
            }
            if(isset($all["vis_url"])){
                $where[]=["vis_url","like","%".$all["vis_url"]."%"];
            }
            if(isset($all["vis_desc"])){
                $where[]=["vis_desc","like","%".$all["vis_desc"]."%"];
            }
        }
        $vists=VisitModel::leftJoin("custom","visit.cust_id","=","custom.cust_id")
                        ->leftjoin('salesman','visit.sale_id','=','salesman.sale_id')
                        ->where($where)
                        ->paginate(3);
        if(request()->ajax()){
            return view("/Admin/recycle/ajaxreds",["vists"=>$vists,"all"=>$all]);
        }
        return view("/Admin/recycle/reds",["vists"=>$vists,"all"=>$all]);
    }
}
