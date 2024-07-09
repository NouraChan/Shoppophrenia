<?php

namespace App\Repository\Interface;
use App\DTO\OrdersDTO;


interface IOrdersRepository {

    public function createOrder(OrdersDTO $orderDTO) : bool;

}

