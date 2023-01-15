<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
            'title_ar' => 'required',
            'title_en' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title_ar.required'          => 'يجب ادخال العنوان باللغة العربية',
            'title_en.required'          => 'يجب ادخال العنوان باللغة الانجليزية',

        ];

    }
}
