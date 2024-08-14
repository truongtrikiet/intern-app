<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => ['required', 'string', 'min:8', 'regex:/^[a-zA-Z0-9~!@£¢#∞&*]+$/' ,'confirmed'],
        ];
    }

    public function messages() {
        return [
            'first_name.required' => 'First name is required',
            'first_name.string' => 'First name must be a string',
            'first_name.max' => 'First name must be less than 30 characters',
            'last_name.required' => 'Last name is required',
            'last_name.string' => 'Last name must be a string',
            'last_name.max' => 'Last name must be less than 30 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email',
            'email.unique' => 'Email is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters',
            'password.regex' => 'Password can only contain letters, numbers and special characters',
            'password.confirmed' => 'Password repeat does not match',
        ];
    }
}
