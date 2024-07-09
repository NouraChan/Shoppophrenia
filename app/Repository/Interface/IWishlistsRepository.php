<?php

namespace App\Repository\Interface;
use App\DTO\WishlistsDTO;


interface IWishlistsRepository {

    public function createWishlists(WishlistsDTO $wishlistsDTO) : bool;

}

