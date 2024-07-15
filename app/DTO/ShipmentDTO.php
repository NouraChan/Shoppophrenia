<?php

namespace App\DTO;

use App\Http\Requests\CreateShipmentRequest;
use Spatie\LaravelData\Data;

class ShipmentDTO extends Data {

    public function __construct(
        public string $shipment_date ,
        public string $address,
        public string $city ,
        public string $country ,
        public string $customer_id ,

        

    )
    {

    }
    public static function handleData(CreateShipmentRequest $createShipmentRequest)
    {

        $data = [
            'shipment_date' => $createShipmentRequest->shipment_date,
            'address' => $createShipmentRequest->address,
            'city' => $createShipmentRequest->city,
            'country' => $createShipmentRequest->country,
            'customer_id' => $createShipmentRequest->customer_id,
          
        ];

        return $data;
    }


}

