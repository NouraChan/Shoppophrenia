<?php

namespace App\Repository\Interface;
use App\DTO\ItemsDTO;


interface IItemsRepository {

    public function createObject($createitemRequest) ;

    public function updateObject(object $item, $itemDTO) :object;


    public function getAll();

    public function getObject($id) : object;
}

