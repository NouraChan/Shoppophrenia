<?php

namespace App\Repository;
use App\Repository\Interface\IWishlistsRepository;
use App\DTO\WishlistsDTO;
use App\Models\Wishlist;


class WishlistsRepository implements IWishlistsRepository {

    public function createWishlists(WishlistsDTO $wishlistsDTO) : bool
    {
        
        if (Wishlist::create($wishlistsDTO->toArray())) {

            return true;
        }
return false;
}
}

