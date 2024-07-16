<?php

namespace App\Repository;
use App\Repository\Interface\ IReviewRepository;
use App\Models\Review;


class ReviewRepository implements IReviewRepository {


    public function createObject($createReviewRequest)
    {
        return Review::create($createReviewRequest);
    }

    public function updateObject(object $review, $reviewDTO) :object
    {

    return $review->update(['name' => $reviewDTO['name']]);
            
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




