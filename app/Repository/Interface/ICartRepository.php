<?php

namespace App\Repository\Interface;
use App\DTO\CartDTO;


interface ICartRepository {


    public function createObject($createCartRequest) ;

    public function updateObject($createCartRequest , $id);


    public function getAll();

    public function getObject($id) : object;
    // public function deleteObject($id): bool;
}

