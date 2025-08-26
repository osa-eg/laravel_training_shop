<?php

namespace App\Http\Requests\Admin\Bannar;

use Illuminate\Foundation\Http\FormRequest;

class StoreBannarRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:30'],
            'sub_title' => ['nullable', 'string', 'max:120'],
            'url' => ['nullable', 'url'],
            'image' => ['required', 'image', 'mimes:jpg,png', 'max:1024']
        ];
    }
}
