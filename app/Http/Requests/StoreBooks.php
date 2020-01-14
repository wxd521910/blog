<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBooks extends FormRequest
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
            // 图书姓名
            'b_name' => 'required|unique:books|between:2,15',
            'b_names' => 'required',
            
        ];
    }
    public function messages(){
        return [
            'b_name.required' => '图书名字必填',
            'b_name.unique' => '图书名字已经存在',
            'b_name.between' => '图书名字在2~15位之间,必须是中文',
            'b_names.required' => '作者必填',
        ];
    }
}
