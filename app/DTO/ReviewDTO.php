<?php

namespace App\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\CreateReviewRequest;

class ReviewDTO extends Data {

   
    public function __construct(
        public string $rate ,
        public string $content,
        public string $product_id,
        public string $customer_id
    )
    {

    }

    public static function handleData(CreateReviewRequest $createReviewRequest) : array
    {

        $data = [
            'rate' => $createReviewRequest->rate,
            'content' => $createReviewRequest->content,
            'product_id' => $createReviewRequest->product_id,
            'customer_id' => $createReviewRequest->customer_id,
               ];

        return $data;
    }

}

