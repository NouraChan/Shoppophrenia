<?php

namespace App\Repository;

use App\Repository\Interface\IOrdersRepository;
use App\DTO\OrdersDTO;
use App\Models\Orders;

class OrdersRepository implements IOrdersRepository
{


    public function createObject($createorderRequest)
    {
        return Orders::create($createorderRequest);
    }

    public function updateObject(object $order, $orderDTO): object
    {

        return $order->update([
            'payment_id' => $orderDTO['payment_id'],
            'customer_id' => $orderDTO['customer_id'],
            'shipment_id' => $orderDTO['shipment_id'],
            'total_price' => $orderDTO['total_price'],
        ]);

    }


    public function getAll()
    {
        return Orders::all();
    }
    public function getObject($id): object
    {
        return Orders::findOrFail($id);
    }
}
