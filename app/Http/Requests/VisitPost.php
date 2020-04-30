<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sale_id'=>'required',
            'cust_id'=>'required',
            'vis_name'=>'required|regex:/^[\x{4e00}-\x{9fa5}\w]{2,10}$/u',
            'vis_url'=>'required',
            'vis_desc'=>'required|regex:/^[\x{4e00}-\x{9fa5}\w]{2,10}$/u',
        ];
    }
     public function messages(){
        return [
             'sale_id.required'=>"业务员名称必选！",    
             'cust_id.required'=>"客户名称必选!",     
             'vis_name.regex'=>"访问人为汉字组成！",    
             'vis_name.required'=>"访问人必填",
             'vis_url.required'=>'地址不可为空！',
             'vis_desc.required'=>'详情不可为空！',
             'vis_desc.regex'=>'详情必须为汉字！',
        ];

    }





}
