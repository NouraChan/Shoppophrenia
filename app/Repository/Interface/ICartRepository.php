<?php

namespace App\Repository\Interface;
use App\DTO\CartDTO;


interface ICartRepository {

    public function createObject($createCartRequest) ;

    public function updateObject(object $cart, $cartDTO) :object;


    public function getAll();

    public function getObject($id) : object;
}

