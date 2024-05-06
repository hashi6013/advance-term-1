<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'max:255', 'email'],
            'password' => ['required', 'regex:/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z\-]/', 'min:8', 'max:24']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力して下さい',
            'name.string' => '名前を文字列で入力して下さい',
            'name.max' => '名前を20文字以内で入力して下さい',
            'email.required' => 'メールアドレスを入力して下さい',
            'email.string' => 'メールアドレスを文字列で入力して下さい',
            'email.max' => 'メールアドレスを255文字以内で入力して下さい',
            'email.email' => '有効なメールアドレス形式を入力して下さい',
            'password.required' => 'パスワードを入力して下さい',
            'password.regex' => '半角英数字(A~Z,a~z,0~9)を最低1つずつ含めて下さい',
            'password.mix' => 'パスワードは、8文字以上で指定して下さい',
            'password.max' => 'パスワードは、24文字以内で指定して下さい',
        ];
    }
}
