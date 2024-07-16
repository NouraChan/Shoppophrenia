<?php

namespace App\Repository;
use App\Repository\Interface\IOrdersRepository;
use App\DTO\OrdersDTO;
use App\Models\Orders;

class OrdersRepository implements IOrdersRepository {

    public function createObject($createOrderRequest)
    {
        return Orders::create($createOrderRequest);
    }

    public function updateObject($createOrderRequest, $id)
    {
        // if (Genre::edit($genreDTO->toArray())) {

        //     return true;
        // }
        // return false;
    }


    public function getAll()
    {
        return Orders::all();
    }
    public function getObject($id): object
    {
        return Orders::findOrFail($id);
    }

}
