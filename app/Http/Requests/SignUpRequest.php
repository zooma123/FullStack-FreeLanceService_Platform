<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        
"name" => 'required|string|max:200|unique:users,name' ,
"email" => 'required|email|string|max:200|unique:users,email',
"password" => "required|string|min:6|confirmed",
"role" => "required" ,
[
'name.required' => 'يجب ادخال اسمك الحقيقي' ,
'name.unique' => 'هذا الاسم مكرر' ,
'email.required' => 'يحب ادخال ايميل صحيح' , 
'email.unique' => "هذا البريد مكرر" ,
'password.required' => 'كلمة المرور مطلوبة.',
'password.min' => 'كلمة المرور يجب أن تكون على الأقل 6 أحرف.',
'password.confirmed' => 'الباسورد غير مطابق احا'
]


        ];
    }
}
