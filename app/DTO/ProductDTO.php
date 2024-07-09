<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class ProductDTO extends Data {

    public function __construct(
        public string $name ,
        public string $description,
        public string $stock ,
        public string $price ,
        public string $rate ,
        public string $product_img ,

    )
    {

    }

}

