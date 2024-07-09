<?php

namespace App\Repository\Interface;
use App\DTO\ShipmentDTO;


interface IShipmentRepository {

    public function createShipment(ShipmentDTO $shipmentDTO) : bool;

}

