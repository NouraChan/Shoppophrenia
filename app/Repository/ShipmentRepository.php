<?php

namespace App\Repository;
use App\Repository\Interface\IShipmentRepository;
use App\DTO\ShipmentDTO;
use App\Models\Shipment;

class ShipmentRepository implements IShipmentRepository {



    public function createObject($createshipmentRequest)
    {
        return Shipment::create($createshipmentRequest);
    }

    public function updateObject(object $shipment, $shipmentDTO) :object
    {

    return $shipment->update(['name' => $shipmentDTO['name']]);
            
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
