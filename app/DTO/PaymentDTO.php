<?php

namespace App\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\CreatePaymentRequest;

class PaymentDTO extends Data {

    public function __construct(
        public string $method ,
        public string $amount,
        public string $payment_date,
        public string $customer_id,
    )
    {

    }

    public static function handleData(CreatePaymentRequest $createPaymentRequest)
    {

        $data = [
            'method' => $createPaymentRequest->method,
            'amount' => $createPaymentRequest->amount,
            'payment_id' => $createPaymentRequest->payment_id,
            'customer_id' => $createPaymentRequest->customer_id,
          
        ];

        foreach($data as $dat => $val){

            $data["$dat"] = trim($data["$dat"]);
            $data["$dat"] = stripcslashes($data["$dat"]);
            $data["$dat"] = htmlspecialchars($data["$dat"]);
            return $data;
        }

        return $data;
    }

}

