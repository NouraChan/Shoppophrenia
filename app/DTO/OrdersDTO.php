<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class OrdersDTO extends Data {

    public function __construct(
        public string $total_price ,
    )
    {

    }

}

