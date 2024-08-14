<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'last_name' => 'required|string|max:20',
            'address' => 'required|string|max:200',
            'status' => 'required|in:0,1,2,3',
        ];
    }
    public function messages() {
        return [
            'first_name.required' => 'First name is required',
            'first_name.max' => 'First name must be less than 30 characters',
            'last_name.required' => 'Last name is required',
            'last_name.max' => 'Last name must be less than 30 characters',
            'address.required' => 'Address is required',
            'address.max' => 'Address must be less than 200 characters',
            'status.required' => 'Status is required',
            'status.in' => 'Invalid status',
        ];
    }
}
