<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'rate' => ['required'],
            'comment' => ['required', 'max:200'],
        ];
    }

    public function messages()
    {
        return [
            'rate.required' => '評価を選択してください',
            'comment.required' => '内容を入力して下さい',
            'comment.max' => '内容を200文字以内で入力して下さい'
        ];
    }
}
