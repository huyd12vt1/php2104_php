<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|max: 50',
            'image' => 'mimes:jpeg,jpg,png|max:20000',
            'price' => 'required|numeric',
            'description' => 'required|max:500',
            'quantity' => 'required|numeric',
            'sale_off' => 'required|numeric',
        ];
    }
}
