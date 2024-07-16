<?php

namespace App\Repository;
use App\Repository\Interface\IWishlistsRepository;
use App\DTO\WishlistsDTO;
use App\Models\Wishlist;


class WishlistsRepository implements IWishlistsRepository {


    public function createObject($createWishlistRequest)
    {
        return Wishlist::create($createWishlistRequest);
    }

    public function updateObject($createWishlistRequest, $id)
    {
        // if (Genre::edit($genreDTO->toArray())) {

        //     return true;
        // }
        // return false;
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

