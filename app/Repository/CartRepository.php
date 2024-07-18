<?php

namespace App\Repository;

use App\Models\Product;
use App\Repository\Interface\ICartRepository;
use App\DTO\CartDTO;
use Jackiedo\Cart\Facades\Cart;

class CartRepository implements ICartRepository
{


    public function createObject($createcartRequest)
    {
        return Cart::create($createcartRequest);
    }

    public function updateObject(object $cart, $cartDTO)
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

    public function insertCart($products) : array {

        $cart =   [
            'products' => $products,
            'total' => Cart::name('shopping')->getDetails()->quantities_sum,
            'items' => Cart::name('shopping')->getDetails()->items,
            'sub_total' => Cart::name('shopping')->getSubtotal(),
            'grand_total' => Cart::name('shopping')->getTotal(),
        ];

    return $cart;

    }

    public function addToCart($product) 
    {

        $cart = [];

        $cart = Cart::name('shopping')->addItem([
            'id' => $product->id,
            'title' => $product->name,
            'price' => $product->price,
            'options' => [
                'product_img' => $product->product_img,
                'stock' => $product->stock,
                'description' => $product->description,
                'genre_id' => $product->genre_id,
                'rate' => $product->rate,
            ],
        ]);

        return $cart;
    }

    public function removeFromCart($id) {
        Cart::name('shopping')->removeItem($id);
    }

}

