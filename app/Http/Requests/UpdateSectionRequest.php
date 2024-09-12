<?php

namespace App\Http\Requests;

use App\Traits\AuthUser;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSectionRequest extends FormRequest
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
            'id'      => ['required', 'integer', 'exists:sections,id'],
            'title'   => ['required', 'string'],
            'content' => ['required', 'string'],
        ];
    }
}
