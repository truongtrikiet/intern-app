<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'first_name' => 'string|max:30',
            'last_name' => 'string|max:20',
            'email' => 'email',
            'address' => 'string',
        ];
    }

    public function messages() {
        return [
            'email.email' => 'Invalid email address',
        ];
    }
}
