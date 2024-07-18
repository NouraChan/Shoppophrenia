<?php

namespace App\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\CreateOrderRequest;

class OrdersDTO extends Data {

    public function __construct(
        public string $total_price ,
        public string $payment_id,
        public string $customer_id,
        public string $shipment_id,
    )
    {

    }

    public static function handleData(CreateOrderRequest $createOrderRequest)
    {

        $data = [
            'total_price' => $createOrderRequest->total_price,
            'payment_id' => $createOrderRequest->payment_id,
            'customer_id' => $createOrderRequest->customer_id,
            'shipment_id' => $createOrderRequest->shipment_id,
           
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

