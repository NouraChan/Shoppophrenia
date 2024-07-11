<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class GenreDTO extends Data {

    public function __construct(
        public string $name ,
    )
    {

    }

}

