<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           
            'first_name'  => 'nullable',
            'last_name'  => 'nullable',
            'gender'  => 'nullable',
            'serial_key'  => 'nullable',
            'fullname'  => 'nullable',
            'phone_number'  => 'nullable',
            'role'  => 'nullable',
            'user_img'  => 'nullable',
            'address' => 'nullable',

        ];
    }
}
