<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'body'=>'required|max:140'
        ];
    }

    public function messages()
    {
        return[
            'body.required'=>'コメント文は必須です。',
            'body.max:140'=>'140字以内で入力してください。'
        ];
    }
}
