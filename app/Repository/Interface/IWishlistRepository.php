<?php

namespace App\Repository\Interface;
use App\DTO\WishlistDTO;


interface IWishlistRepository {


    public function createObject($createwishlistRequest) ;

    public function updateObject(object $wishlist, $wishlistDTO) ;


    public function getAll();

    public function getObject($id) : object;
}

