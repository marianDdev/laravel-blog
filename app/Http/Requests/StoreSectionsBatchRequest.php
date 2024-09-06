<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreSectionsBatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'post_id'            => ['required', 'integer', Rule::exists('posts', 'id')],
            'sections'           => ['nullable', 'array'],
            'sections.*.title'   => ['nullable', 'string'],
            'sections.*.content' => ['nullable', 'string'],
        ];
    }
}
