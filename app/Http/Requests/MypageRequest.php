<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MypageRequest extends FormRequest
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
            'email'=>'required|email|',
            'name' => 'required', 
            'new-password'=>'required|min:8|confirmed'  

        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'メールアドレスを入力してください。',
            'name.required'=>'ユーザー名を入力してください。',
            'email.email'=>'正しい形式で入力してください。',
            'new-password.required'=>'パスワードを入力してください。',
            'new-password.min:8'=>'パスワードは8字以上で入力してください。'

        ];  
    }
}
    