<?php

namespace App\Repository;

use App\Models\Cart;
use App\Repository\Interface\ICartRepository;
use App\DTO\CartDTO;

class CartRepository implements ICartRepository
{

    public function createObject($createCartRequest)
    {

        // if (Cart::create($cartDTO->toArray())) {

        //     return true;
        // }
        // return false;
    }

    public function updateObject($createCartRequest, $id)
    {
        // if (Cart::edit($cartDTO->toArray())) {

        //     return true;
        // }
        // return false;

    }
    public function getAll()
    {
        return Cart::all();
    }
    public function getObject($id): object
    {
        return cart::findOrFail($id);
    }
}

