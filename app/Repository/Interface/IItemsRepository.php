<?php

namespace App\Repository\Interface;
use App\DTO\ItemsDTO;


interface IItemsRepository {

    public function createItem(ItemsDTO $itemDTO) : bool;

}

