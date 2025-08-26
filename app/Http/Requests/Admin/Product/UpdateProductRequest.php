<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:30', Rule::unique('categories', 'name')->ignore($this->category->id)],
            'price_before_discount' => ['required', 'numeric', 'max:9999999', 'min:0'],
            'price_after_discount' => ['required', 'numeric', 'max:9999999', 'min:0'],
            'details' => ['required', 'string', 'max:5000'],
            'specification' => ['required', 'string', 'max:5000'],
            'image' => ['nullable', 'image', 'mimes:jpg,png', 'max:1024']
        ];
    }
}
