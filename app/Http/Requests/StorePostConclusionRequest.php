<?php

namespace App\Http\Requests;

use App\Traits\AuthUser;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StorePostConclusionRequest extends FormRequest
{
    use AuthUser;

    public function authorize(): bool
    {
        return $this->authUser()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id'         => ['required', 'integer', Rule::exists('posts', 'id')],
            'conclusion' => ['nullable', 'string'],
        ];
    }
}
