<?php

namespace App\Http\Requests;

use App\Traits\AuthUser;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreSectionsBatchRequest extends FormRequest
{
    use AuthUser;

    public function authorize(): bool
    {
        return $this->authUser()->isAdmin();
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
