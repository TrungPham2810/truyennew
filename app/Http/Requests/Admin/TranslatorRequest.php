<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TranslatorRequest extends FormRequest
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
            'translator_name' => 'bail|required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'translator_name.required'  => 'Tên dịch giả không được để trống',
        ];
    }
}
