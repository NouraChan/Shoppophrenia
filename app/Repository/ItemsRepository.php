<?php

namespace App\Repository;
use App\Repository\Interface\IItemsRepository;
use App\DTO\ItemsDTO;
use App\Models\Items;

class ItemsRepository implements IItemsRepository {

    public function createItem(ItemsDTO $itemDTO) : bool
    {
        
        if (Items::create($itemDTO->toArray())) {

            return true;
        }
return false;
}
}

