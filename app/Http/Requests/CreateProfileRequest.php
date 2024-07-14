<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            'birthday' => 'nullable|date',
            'role'=> 'required',
            'gender'=> 'nullable',
            'user_img'=>'nullable|string',
            'address'=>'nullable|string',
            'serial_key'=>'nullable|text',
            'phone_number'=>'required|string',
            'fullname' => 'nullable|string',
            'user_id' => 'required',      
        ];
    }
}
