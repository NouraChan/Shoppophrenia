<?php

namespace App\Repository;
use App\Repository\Interface\IItemsRepository;
use App\DTO\ItemsDTO;
use App\Models\Items;

class ItemsRepository implements IItemsRepository {

   
    public function createObject($createitemRequest)
    {
        return Items::create($createitemRequest);
    }

    public function updateObject(object $item, $itemDTO) :object
    {

    return $item->update(['name' => $itemDTO['name']]);
            
    }


    public function getAll()
    {
        return Items::all();
    }
    public function getObject($id): object
    {
        return Items::findOrFail($id);
    }
}