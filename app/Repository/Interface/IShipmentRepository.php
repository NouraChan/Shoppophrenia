<?php

namespace App\Repository\Interface;
use App\DTO\ShipmentDTO;


interface IShipmentRepository {

    public function createObject($createShipmentRequest) ;

    public function updateObject(object $shipment, $shipmentDTO) :object;


    public function getAll();

    public function getObject($id) : object;
}

