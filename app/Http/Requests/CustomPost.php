<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;//第三种
class CustomPost extends FormRequest
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
        $name= \Route::currentRouteName();
        if($name=='chong'){
        return [
            'cust_name'=>'required|unique:custom|regex:/^[\x{4e00}-\x{9fa5}\w]{2,10}$/u',
            'sale_id'=>'required', 
            'cust_phone'=>'required|regex:/^\w{8}$/',
            'cust_tel'=>'required|regex:/^1[356789]\d{9}$/',
        ];
          }
       
        if($name=="zi"){
         return [  // 排除自身ID //unique 里写表名
            'cust_name'=>[
            Rule::unique("custom")->ignore(request()->id,'cust_id'),
            "regex:/^[\x{4e00}-\x{9fa5}\w]{2,10}$/u"
            ],
            "sale_id"=>"required",
             "cust_phone"=>"required|regex:/^\w{8}$/",
             "cust_tel"=>"required|regex:/^1[356789]\d{9}$/",
              // |regex:/^1[3|5|6|7|8|9]\d{9}$/
                ];
          }




    }
    public function messages(){
        return [
            'cust_name.required'=>"客户名称不可为空！",    
            'cust_name.unique'=>"客户名称已存在!",     
            'cust_name.regex'=>"客户名称为汉字组成！",    
            'sale_id.required'=>"业务员必选！",
            'cust_phone.required'=>'电话号码不可为空！',
            'cust_phone.regex'=>'电话号码8位纯数字！',
            'cust_tel.required'=>'手机号不可为空！',
            'cust_tel.regex'=>'手机号格式不正确！',
        ];

    }




}
