<?php

namespace App\Repository\Interface;
use App\DTO\CartDTO;


interface ICartRepository {


    public function createObject(CartDTO $cartDTO) : bool;

    public function updateObject(CartDTO $cartDTO , $id) : bool;


    public function getAll();

    public function getObject($id) : object;

    // public function deleteObject($id): bool;
}

