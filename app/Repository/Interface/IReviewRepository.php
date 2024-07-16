<?php

namespace App\Repository\Interface;


interface IReviewRepository {
    public function createObject($createReviewRequest) ;

    public function updateObject(object $review, $reviewDTO) :object;


    public function getAll();

    public function getObject($id) : object;

}
