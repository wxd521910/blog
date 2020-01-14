<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
            'g_name' => 'required|unique:posts|max:255',
        ];
    }
    public function messages(){
        return [
            'g_name.required'=>'商品名称必填',
            'g_name.unique'=>'商品名称已重复',
        ];
    }
}
