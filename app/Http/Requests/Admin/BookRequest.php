<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'book_name' => 'bail|required|max:255',
            'category_id' => 'required',
            'author_id' => 'required',
            'url_key' => 'bail|required|unique:authors,url_key,'.$this->id.'|max:225',
        ];
    }

    public function messages()
    {
        return [
            'book_name.required'  => 'Tên tác giả không được để trống.',
            'url_key.required'  => 'Url key không được để trống.',
            'category_id.required'  => 'Vui lòng chọn thể loại truyện.',
            'author_id.required'  => 'Vui lòng chọn tác giả.',
            'url_key.unique'  => 'Url key đã tồn tại.',
        ];
    }
}
