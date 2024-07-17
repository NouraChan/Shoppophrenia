<?php

namespace App\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\CreateProductRequest;

class ProductDTO extends Data {

    public function __construct(
        public string $name ,
        public string $description,
        public string $stock ,
        public string $price ,
        public string $rate ,
        public string $product_img ,
        public string $genre_id

    )
    {

    }

    public static function handleData(CreateProductRequest $createProductRequest)
    {

        $data = [
            'name' => $createProductRequest->name,
            'description' => $createProductRequest->description,
            'stock' => $createProductRequest->stock,
            'price' => $createProductRequest->price,
            'rate' => $createProductRequest->rate,
            // 'product_img' => $createProductRequest->product_img,
            'genre_id' => $createProductRequest->genre_id,
           
        ];

        if ($createProductRequest->product_img) {
            $img = $createProductRequest->product_img;
            $newimg = time() . $img->getClientOriginalName();
            $img->move('img/productimg/', $newimg);
            $data['product_img'] = 'img/productimg/' . $newimg;
        }
        return $data;
    }

}

