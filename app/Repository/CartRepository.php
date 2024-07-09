<?php

namespace App\Repository;
use App\Models\Cart;
use App\Repository\Interface\ICartRepository;
use App\DTO\CartDTO;

class CartRepository implements ICartRepository {

    public function createCart(CartDTO $cartDTO) : bool
    {
        
        if (Cart::create($cartDTO->toArray())) {

            return true;
        }
return false;
}
}

