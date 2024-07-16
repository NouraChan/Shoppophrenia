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

    public function updateObject(object $cart, $cartDTO): object
    {

        return $cart->update([
            'quantity' => $cartDTO['quantity'],
            'total_price' => $cartDTO['total_price'],
            'customer_id' => $cartDTO['customer_id'],
            'product_id' => $cartDTO['product_id'],
        ]);


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

