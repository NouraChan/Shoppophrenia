<?php

namespace App\Repository;

use App\Repository\Interface\IShipmentRepository;
use App\DTO\ShipmentDTO;
use App\Models\Shipment;

class ShipmentRepository implements IShipmentRepository
{



    public function createObject($createshipmentRequest)
    {
        return Shipment::create($createshipmentRequest);
    }

    public function updateObject(object $shipment, $shipmentDTO)
    {

        return $shipment->update([
            'country' => $shipmentDTO['country'],
            'city' => $shipmentDTO['city'],
            'customer_id' => $shipmentDTO['customer_id'],
            'shipment_date' => $shipmentDTO['shipment_date'],
            'address' => $shipmentDTO['address'],
        ]);

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
