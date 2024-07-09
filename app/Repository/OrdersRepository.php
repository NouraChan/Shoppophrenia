<?php

namespace App\Repository;
use App\Repository\Interface\IOrdersRepository;
use App\DTO\OrdersDTO;
use App\Models\Orders;

class OrdersRepository implements IOrdersRepository {

    public function createOrder(OrdersDTO $orderDTO) : bool
    {
        
        if (Orders::create($orderDTO->toArray())) {

            return true;
        }
return false;
}
}

