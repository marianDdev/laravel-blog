<?php

namespace App\Http\Requests;

use App\Traits\AuthUser;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdatePostRequest extends FormRequest
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
            'id'               => ['required', 'integer', 'exists:posts,id'],
            'title'            => ['nullable', 'string'],
            'summary'          => ['nullable', 'string'],
            'first_paragraph'  => ['nullable', 'string'],
            'second_paragraph' => ['nullable', 'string'],
            'third_paragraph'  => ['nullable', 'string'],
            'conclusion'       => ['nullable', 'string'],
        ];
    }
}
