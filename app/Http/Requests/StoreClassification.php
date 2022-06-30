<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassification extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name' => 'required|string|max: 100|unique:classifications,name',
            'description' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'هذا الحقل مطلوب',
        ];
    }
}
