<?php

namespace App\Repository;
use App\Repository\Interface\IShipmentRepository;
use App\DTO\ShipmentDTO;
use App\Models\Shipment;

class ShipmentRepository implements IShipmentRepository {


    public function createObject($createShipmentRequest)
    {
        return Shipment::create($createShipmentRequest);
    }

    public function updateObject($createShipmentRequest, $id)
    {
        // if (Genre::edit($genreDTO->toArray())) {

        //     return true;
        // }
        // return false;
    }


    public function getAll()
    {
        return Shipment::all();
    }
    public function getObject($id): object
    {
        return Shipment::findOrFail($id);
    }

}
