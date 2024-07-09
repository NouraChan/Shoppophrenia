<?php

namespace App\Repository\Interface;
use App\DTO\CartDTO;


interface ICartRepository {

    public function createCart(CartDTO $cartDTO) : bool;

}

