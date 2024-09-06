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
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'post_id'            => ['required_if:sections', 'integer', Rule::exists('posts', 'id')],
            'sections'           => ['nullable', 'array'],
            'sections.*.title'   => ['required_if:sections', 'string'],
            'sections.*.content' => ['required_if:sections', 'content'],
        ];
    }
}
