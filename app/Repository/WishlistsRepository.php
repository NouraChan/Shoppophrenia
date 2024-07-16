<?php

namespace App\Repository;
use App\Repository\Interface\IWishlistsRepository;
use App\DTO\WishlistsDTO;
use App\Models\Wishlist;


class WishlistsRepository implements IWishlistsRepository {


    public function createObject($createwishlistRequest)
    {
        return Wishlist::create($createwishlistRequest);
    }

    public function updateObject(object $wishlist, $wishlistDTO) :object
    {

    return $wishlist->update(['name' => $wishlistDTO['name']]);
            
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

