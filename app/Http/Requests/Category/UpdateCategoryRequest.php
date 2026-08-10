<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // route parameter model Category bernama 'category'
        $categoryId = $this->route('category')?->id;

        return [
            'name' => ['sometimes', 'required', 'string', 'max:100'],
            'slug' => [
                'sometimes',
                'nullable',
                'string',
                'max:100',
                'alpha_dash',
                Rule::unique('categories', 'slug')->ignore($categoryId),
            ],
        ];
    }

    protected function prepareForValidation(): void
    {
        if (!$this->filled('slug') && $this->filled('name')) {
            $this->merge([
                'slug' => Str::slug($this->input('name')),
            ]);
        }
    }
}
