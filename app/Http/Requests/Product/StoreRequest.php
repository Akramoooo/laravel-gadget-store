<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'prod_name' => 'required|string|max:30',
            'price' => 'required|integer',
            'description' => 'required|string|max:600',
            'image' => 'required|image',
            'category_id' => 'required|integer'
        ];
    }
}
