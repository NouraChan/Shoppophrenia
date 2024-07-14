<?php

namespace App\Repository\Interface;
use App\DTO\WishlistsDTO;


interface IWishlistsRepository {


    public function createObject(WishlistsDTO $wishlistsDTO) : bool;

    public function updateObject(WishlistsDTO $wishlistsDTO , $id) : bool;


    public function getAll();

    public function getObject($id) : object;

    public function deleteObject($id): bool;
}

