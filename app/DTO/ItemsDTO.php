<?php

namespace App\DTO;

use App\Http\Requests\CreateItemRequest;
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

    public static function handleData(CreateItemRequest $createItemRequest)
    {

        $data = [
            'quantity' => $createItemRequest->quantity,
            'price' => $createItemRequest->price,
            'product_id' => $createItemRequest->product_id,
            'order_id' => $createItemRequest->order_id,
           
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

