<?php

namespace App\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\CreateOrderRequest;

class OrderDTO extends Data {

    public function __construct(
        public string $total_price ,
        public string $customer_id,
    )
    {

    }

    public static function handleData(CreateOrderRequest $createOrderRequest)
    {

        $data = [
            'total_price' => $createOrderRequest->total_price,
            'customer_id' => $createOrderRequest->customer_id,
           
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

