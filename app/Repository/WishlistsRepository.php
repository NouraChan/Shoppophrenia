<?php

namespace App\Repository;

use App\Repository\Interface\IWishlistsRepository;
use App\DTO\WishlistsDTO;
use App\Models\Wishlist;


class WishlistsRepository implements IWishlistsRepository
{


    public function createObject($createwishlistRequest)
    {
        return Wishlist::create($createwishlistRequest);
    }

    public function updateObject(object $wishlist, $wishlistDTO): object
    {

        return $wishlist->update([
            'title' => $wishlistDTO['title'],
            'desciption' => $wishlistDTO['desciption'],
            '[product_id]' => $wishlistDTO['[product_id]'],
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

