<?php

namespace App\Repository;

use App\Repository\Interface\IReviewRepository;
use App\Models\Review;


class ReviewRepository implements IReviewRepository
{


    public function createObject($createReviewRequest)
    {
        return Review::create($createReviewRequest);
    }

    public function updateObject(object $review, $reviewDTO)
    {

        return $review->update([
            'content' => $reviewDTO['content'],
            'rate' => $reviewDTO['rate'],
            'customer_id' => $reviewDTO['customer_id'],
            'product_id' => $reviewDTO['product_id'],
        ]);

    }


    public function getAll()
    {
        return Review::all();
    }
    public function getObject($id): object
    {
        return Review::findOrFail($id);
    }

}




