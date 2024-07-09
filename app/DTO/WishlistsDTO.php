<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class WishlistsDTO extends Data {

    public function __construct(
        public string $title ,
        public string $description,
    )
    {

    }

}

