<?php

namespace App\Repository;

use App\Repository\Interface\IWishlistRepository;
use App\DTO\WishlistDTO;
use App\Models\Wishlist;


class WishlistRepository implements IWishlistRepository
{


    public function createObject($createwishlistRequest)
    {
        return Wishlist::create($createwishlistRequest);
    }

    public function updateObject(object $wishlist, $wishlistDTO)
    {

        return $wishlist->update([
            'title' => $wishlistDTO['title'],
            'desciption' => $wishlistDTO['desciption'],
            'product_id' => $wishlistDTO['product_id'],
            'customer_id' => $wishlistDTO['customer_id']
        ]);

    }


    public function getAll()
    {
        return Wishlist::all();
    }
    public function getObject($id): object
    {
        return Wishlist::findOrFail($id);
    }
}

