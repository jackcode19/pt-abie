<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => 'required|string|max:255',
            'product_image' => 'nullable|image|mimes:png,jpg,jpeg,gift,svg',
            'description' => 'required|string',
        ];
    }


    public function messages(): array
    {
        return [
            'product_name.required' => 'Nama produk harus diisi.',
            'product_name.string' => 'Nama produk harus berupa string.',
            'product_name.max' => 'Nama produk maksimal 255 karakter.',
            'description.string' => 'Deskripsi produk harus berupa string.',
        ];
    }
}
