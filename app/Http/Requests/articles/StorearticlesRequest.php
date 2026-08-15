<?php

namespace App\Http\Requests\articles;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StorearticlesRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function rules(): array
    {
        return [
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:articles,slug', 'alpha_dash'],
            'description' => ['nullable', 'string'],
            'sub_description' => ['nullable', 'string'],
            'status' => ['nullable', 'in:draft,published,archived'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'sub_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $merge = [];

        if (!$this->filled('slug') && $this->filled('name')) {
            $merge['slug'] = Str::slug($this->input('name'));
        }

        $this->merge($merge);
    }

    public function messages(): array
    {
        return [
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists' => 'Kategori yang dipilih tidak valid.',
            'name.required' => 'Judul artikel wajib diisi.',
            'slug.unique' => 'Slug artikel sudah digunakan.',
            'status.in' => 'Status harus salah satu dari: draft, published, archived.',
        ];
    }
}