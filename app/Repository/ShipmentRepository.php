<?php

namespace App\Repository;
use App\Repository\Interface\IShipmentRepository;
use App\DTO\ShipmentDTO;
use App\Models\Shipment;

class ShipmentRepository implements IShipmentRepository {

    public function createShipment(ShipmentDTO $shipmentDTO) : bool
    {
        
        if (Shipment::create($shipmentDTO->toArray())) {

            return true;
        }
return false;
}
}

