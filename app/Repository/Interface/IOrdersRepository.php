<?php

namespace App\Repository\Interface;
use App\DTO\OrdersDTO;


interface IOrdersRepository {


    public function createObject(OrdersDTO $ordersDTO) : bool;

    public function updateObject(OrdersDTO $ordersDTO , $id) : bool;


    public function getAll();

    public function getObject($id) : object;

    public function deleteObject($id): bool;
}

