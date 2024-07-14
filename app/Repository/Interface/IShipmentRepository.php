<?php

namespace App\Repository\Interface;
use App\DTO\ShipmentDTO;


interface IShipmentRepository {


    public function createObject(ShipmentDTO $shipmentDTO) : bool;

    public function updateObject(ShipmentDTO $shipmentDTO , $id) : bool;


    public function getAll();

    public function getObject($id) : object;

    public function deleteObject($id): bool;
}

