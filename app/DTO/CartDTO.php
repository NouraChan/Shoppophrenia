<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class CartDTO extends Data {

    public function __construct(
        public string $quantity ,
    )
    {

    }
}