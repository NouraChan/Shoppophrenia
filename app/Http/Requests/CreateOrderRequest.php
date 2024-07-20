<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
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
            // 'total_price'=> 'required',
            // 'shipment_date'=> 'required',
            // 'address'=> 'required',
            // 'city'=> 'required',
            // 'country'=> 'required',
            // 'method'=> 'required',
            // 'status'=> 'required',
            // 'customer_id'=> 'required',
            // 'product_id'=> 'required',



            
        ];
    }
}
