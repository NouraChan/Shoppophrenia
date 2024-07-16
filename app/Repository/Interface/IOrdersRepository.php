<?php

namespace App\Repository\Interface;
use App\DTO\OrdersDTO;


interface IOrdersRepository {


    public function createObject($createOrderRequest) ;

    public function updateObject($createOrderRequest , $id);


    public function getAll();

    public function getObject($id) : object;

    // public function deleteObject($id): bool;
}

