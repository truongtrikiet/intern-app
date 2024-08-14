<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'new_password' => ['required', 'string', 'min:8', 'regex:/^[a-zA-Z0-9~!@£¢#∞&*]+$/' ,'confirmed'],
            're_new_password' => ['required'],
        ];
    }
}
