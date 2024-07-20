<?php

namespace App\Repository\Interface;
use App\DTO\OrdersDTO;


interface IOrderRepository {

    public function createObject($createOrderRequest) ;

    public function updateObject(object $order, $orderDTO);


    public function getAll();

    public function getObject($id) : object;
}

