<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class ShipmentDTO extends Data {

    public function __construct(
        public string $shipment_date ,
        public string $address,
        public string $city ,
        public string $country ,

    )
    {

    }

}

