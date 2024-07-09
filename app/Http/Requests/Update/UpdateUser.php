<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
            'firstname' => 'nullable|string',
            'lastname' => 'nullable|string',
            'name' => 'required|string',
            'email' => 'required|email|string',
            'password' => 'required|string',
            'role' => 'required',
            'gender' => 'required',
            'image' => 'nullable|string',
            'address' => 'nullable|string',
            'bio' => 'nullable|text',
            'birthdate' => 'nullable|date',
        ];
    }
}
