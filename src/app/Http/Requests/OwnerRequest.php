<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
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
            'shop_name' => ['required', 'string', 'max:20'],
            'shop_overview' => ['required', 'string', 'max:255'],
            'area_id' => ['prohibited_if:area_id,null'],
            'genre_id' => ['prohibited_if:genre_id,null'],
            'shop_image' => ['required', 'image'],
        ];
    }

    public function messages()
    {
        return [
            'shop_name.required' => '店舗名を入力してください',
            'shop_name.string' => '店舗名を文字列で入力してください',
            'shop_name.max' => '店舗名を20文字以内で入力してください',
            'shop_overview.required' => '店舗概要を入力してください',
            'shop_overview.string' => '店舗概要を文字列で入力してください',
            'shop_overview.max' => '店舗概要を255文字以内で入力してください',
            'area_id.prohibited_if' => '地域を選択してください',
            'genre_id.prohibited_if' => 'ジャンルを選択してください',
            'shop_image.required' => 'お店の画像を選択してください',
            'shop_image.image' => 'ファイルは画像を選択してください',
        ];
    }
}
