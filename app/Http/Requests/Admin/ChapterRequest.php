<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ChapterRequest extends FormRequest
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
            'chapter_name' => 'bail|required|max:255',
            'book_id' => 'required',
            'translator_id' => 'required',
            'url_key' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'chapter_name.required'  => 'Tên chapter không được để trống.',
            'url_key.required'  => 'Url key không được để trống.',
            'book_id.required'  => 'Vui lòng chọn tên truyện.',
            'translator_id.required'  => 'Vui lòng chọn dịch giả.',
        ];
    }
}
