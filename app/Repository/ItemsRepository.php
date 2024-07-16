<?php

namespace App\Repository;
use App\Repository\Interface\IItemsRepository;
use App\DTO\ItemsDTO;
use App\Models\Items;

class ItemsRepository implements IItemsRepository {

   
    public function createObject($createOrderitemRequest)
    {
        return Items::create($createOrderitemRequest);
    }

    public function updateObject($createOrderitemRequest, $id)
    {
        // if (Genre::edit($genreDTO->toArray())) {

        //     return true;
        // }
        // return false;
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