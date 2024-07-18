<?php

namespace App\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\CreateWishlistRequest;

class WishlistDTO extends Data {

    public function __construct(
        public string $title ,
        public string $description,
        public string $product_id,
        public string $customer_id,
    )
    {

    }
    public static function handleData(CreateWishlistRequest $createWishlistRequest)
    {

        $data = [
            'title' => $createWishlistRequest->title,
            'description' => $createWishlistRequest->description,
            'product_id' => $createWishlistRequest->product_id,
            'customer_id' => $createWishlistRequest->customer_id,
           
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

