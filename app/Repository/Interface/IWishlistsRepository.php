<?php

namespace App\Repository\Interface;
use App\DTO\WishlistsDTO;


interface IWishlistsRepository {


   
    public function createObject($createWishlistRequest) ;

    public function updateObject($createWishlistRequest , $id);


    public function getAll();

    public function getObject($id) : object;

    // public function deleteObject($id): bool;
}

