<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
                'age'=>'not_in:error',
                'artist'=>'required',
                'introduce'=>'required|max:140',
                'image'=>'required|image|mimes:jpeg,png,jpg,gif',
                'gender'=>'required',
                'music'=>'required',
                'place'=>'not_in:error'
        ];
    }

    public function messages()
    {
        return [
            'artist.required'=>'好きなアーティストは必須です',
            'max:140'=>'140字以内で入力してください', 
            'introduce.required'=>'紹介文は必須です。',  
            'age.required'=>'年齢は必須です。',
            'music.required'=>'音楽ジャンルは必須です。',
            'gender.required'=>'性別は必須です。',
            'image.required'=>'画像の登録は必須です。',
            "mines" => "指定された拡張子（PNG/JPG/GIF）ではありません。",
            'image.image'=>'指定されたファイルが画像ではありません。',
            'place.not_in'=>'居住地を選択してください。',
            'age.not_in'=>'年齢を選択してください。'

        ];  
    }
}
