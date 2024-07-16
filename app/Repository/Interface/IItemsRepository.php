<?php

namespace App\Repository\Interface;
use App\DTO\ItemsDTO;


interface IItemsRepository {


    public function createObject($createOrderitemtemRequest) ;

    public function updateObject($createOrderitemRequest , $id);


    public function getAll();

    public function getObject($id) : object;
    // public function deleteObject($id): bool;
}

