<?php

namespace App\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\CreateCartRequest;

class CartDTO extends Data {

    public function __construct(
        public string $quantity ,public string $product_id,public string $customer_id, public string $total_price
    )
    {

    }

    public static function handleData(CreateCartRequest $createCartRequest): array
    {

        $data = [
            'quantity' => $createCartRequest->quantity,
            'total_price' => $createCartRequest->total_price,
            'product_id' => $createCartRequest->product_id,
            'customer_id' => $createCartRequest->customer_id,

        ];

      
        return $data;
    }
}