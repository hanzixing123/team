<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'user_name' => 'required|unique:user|max:40',
            'user_pwd'=>'required|max:40|regex:/^\w{8,}$/u',
            'user_del'=>'required',
            'user_pan'=>'required',
        ];
    }
     public function messages(){
        return [
             'user_name.required'=>"用户名必填！",    
             'user_name.user'=>"用户名已存在！!",     
             'user_name.max'=>"用户名长度最大为40！",    

             'user_pwd.required'=>"密码不能为空！",
             'user_pwd.max'=>'密码长度最大为40！',
             'user_pwd.regex'=>'密码可以为数字字母下划线最少为8为数！',

             'user_del.required'=>'等级不可为空！',
             'user_pan.required'=>'请输入注册密码不可为空！',
        ];

    }

}
