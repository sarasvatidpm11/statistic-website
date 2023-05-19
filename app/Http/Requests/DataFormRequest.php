<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'stu_id' => [
                'required',
                'min:10'
            ],
            'stu_name' => [
                'required',
                'max:255'
            ],
            'class' => [
                'required',
                'max:5'
            ],
            'email' => [
                'required',
                'max:255',
                'email'
            ],
            'score' => [
                'required',
            ],
        ];
    }
}
