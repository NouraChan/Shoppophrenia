<?php

namespace App\Repository\Interface;
use App\DTO\ItemsDTO;


interface IItemsRepository {


    public function createObject(ItemsDTO $itemsDTO) : bool;

    public function updateObject(ItemsDTO $itemsDTO , $id) : bool;


    public function getAll();

    public function getObject($id) : object;

    public function deleteObject($id): bool;
}

