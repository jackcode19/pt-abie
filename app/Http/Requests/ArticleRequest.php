<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'category_id' => 'required',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gift,svg',
            'content' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'category_id.required' => 'Kategori artikel harus diisi.',
            'title.required' => 'Judul artikel tidak boleh kosong.',
            'title.string' => 'Nama produk harus berupa string.',
            'title.max' => 'Nama produk maksimal 255 karakter.',
            'content.required' => 'Deskripsi harus diisi.',
        ];
    }
}
