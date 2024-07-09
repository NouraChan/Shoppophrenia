<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class ItemsDTO extends Data {

    public function __construct(
        public string $quantity ,
        public string $price,
    )
    {

    }

}

