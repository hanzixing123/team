<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SelsmanStrout extends FormRequest
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
            'sale_name' => 'required|unique:salesman|max:40|regex:/^[\x7f-\xffA-Za-z0-9\s]+$/u',
            'sale_sex'=>'required',
            'sale_phone'=>'required',
            'sale_tel'=>'required',
        ];
    }
     public function messages(){
        return [
             'sale_name.required'=>"业务员姓名不能为空！", 
             'sale_name.unique'=>"业务员姓名已存在！", 
             'sale_name.max'=>"业务员姓名长度最大为40！", 
             'sale_name.regex'=>"业务员姓名为汉字数字字母组成！",

             'sale_sex.required'=>"业务员性别不能为空!", 

             'sale_phone.required'=>"业务员办公电话",    

             'sale_tel.required'=>"业务员手机号码",
        ];

    }
}
