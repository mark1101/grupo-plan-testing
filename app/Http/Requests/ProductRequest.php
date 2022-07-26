<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'tension' => 'required',
            'brand_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome do produto é obrigatório',
            'description.required' => 'O descrição do produto é obrigatória',
            'tension.email' => 'O tensão do produto é obrigatória',
            'brand_id' => '0 o produto deve ter uma marca obrigatória'
        ];
    }
}
