<?php

namespace App\DTO;

use App\Http\Requests\CreateOrderitemRequest;
use Spatie\LaravelData\Data;

class ItemsDTO extends Data {

    public function __construct(
        public string $quantity ,
        public string $price,
        public string $product_id,
        public string $order_id,
    )
    {

    }

    public static function handleData(CreateOrderitemRequest $createOrderitemRequest)
    {

        $data = [
            'quantity' => $createOrderitemRequest->quantity,
            'price' => $createOrderitemRequest->price,
            'product_id' => $createOrderitemRequest->product_id,
            'order_id' => $createOrderitemRequest->order_id,
           
        ];

     return $data;
    }

}

