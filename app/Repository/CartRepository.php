<?php

namespace App\Repository;

use App\Models\Cart;
use App\Repository\Interface\ICartRepository;
use App\DTO\CartDTO;

class CartRepository implements ICartRepository
{

   
    public function createObject($createcartRequest)
    {
        return Cart::create($createcartRequest);
    }

    public function updateObject(object $cart, $cartDTO) :object
    {

    return $cart->update(['name' => $cartDTO['name']]);
            
    }


    public function getAll()
    {
        return Cart::all();
    }
    public function getObject($id): object
    {
        return Cart::findOrFail($id);
    }
}

