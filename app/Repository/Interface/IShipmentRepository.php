<?php

namespace App\Repository\Interface;
use App\DTO\ShipmentDTO;


interface IShipmentRepository {


    public function createObject($createShipmentRequest) ;

    public function updateObject($createShipmentRequest , $id);


    public function getAll();

    public function getObject($id) : object;
    // public function deleteObject($id): bool;
}

