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
           
            'first_name'=>'nullable|string',
            'last_name'=>'nullable|string',
            'username' => 'required|string',
            'email' => 'required|email|string',
            'password'=> 'required|string',
            'role'=> 'required',
            'gender'=> 'required',
            'user_img'=>'nullable|string',
            'address'=>'nullable|string',
            'serial_key'=>'nullable|text',
            'phone_number'=>'required|string',
            'fullname' => "first_name" . " " . "last_name",
        ];
    }
}
