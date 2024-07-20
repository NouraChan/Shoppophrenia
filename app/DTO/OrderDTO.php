<?php

namespace App\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\CreateOrderRequest;
use Auth;
use Jackiedo\Cart\Facades\Cart;

class OrderDTO extends Data
{

    public function __construct(
        public string $total_price,
        public string $customer_id,
        public string $product_id,
        public string $method,
        public string $status,
        public string $address,
        public string $country,
        public string $city,
        public string $shipment_date,

    ) {

    }

    public static function handleData(CreateOrderRequest $createOrderRequest)
    {
        $items = Cart::name('shopping')->getDetails()->items;
        foreach ($items as $hash => $item) {
            $data = [
                'total_price' => $createOrderRequest->total_price,
                'customer_id' => Auth::user()->id,
                'product_id' => $item->id,
                'shipment_date' => $createOrderRequest->shipment_date,
                'method' => $createOrderRequest->method,
                'address' => $createOrderRequest->address,
                'country' => $createOrderRequest->country,
                'city' => $createOrderRequest->city,


            ];

            foreach ($data as $dat => $val) {

                $data["$dat"] = trim($data["$dat"]);
                $data["$dat"] = stripcslashes($data["$dat"]);
                $data["$dat"] = htmlspecialchars($data["$dat"]);
                return $data;
            }
            return $data;
        }

    }
}
