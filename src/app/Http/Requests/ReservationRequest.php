<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'reserve_date' => ['required', 'after:yesterday'],
            'reserve_time' => ['prohibited_if:reserve_time,null'],
            'reserve_number' =>['prohibited_if:reserve_number,null']
        ];
    }
    
    public function messages()
    {
        return [
            'reserve_date.required' => '日付を選択してください',
            'reserve_date.after' => '本日以降の日付を選択してください',
            'reserve_time.prohibited_if' => '予約時間を選択してください',
            'reserve_number.prohibited_if' => '予約人数を選択してください'
        ];
    }
}
