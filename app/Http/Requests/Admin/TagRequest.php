<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            'tag_name' => 'bail|required|max:255',
            'url_key' => 'bail|required|unique:tags,url_key,'.$this->id.'|max:225',
        ];
    }

    public function messages()
    {
        return [
            'tag_name.required'  => 'Tên danh sách không được để trống',
            'url_key.required'  => 'Url key không được để trống',
            'url_key.unique'  => 'Url key đã tồn tại',
        ];
    }
}
