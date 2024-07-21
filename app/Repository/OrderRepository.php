<?php

namespace App\Repository;

use App\Models\Order_item;
use App\Repository\Interface\IOrderRepository;
use App\DTO\OrderDTO;
use App\Models\Order;
use Auth;
use Jackiedo\Cart\Facades\Cart;

class OrderRepository implements IOrderRepository
{

    public function createObject($orderDTO)
    {

        $items = Cart::name('shopping')->getDetails()->items;
        $order = Order::create($orderDTO);


        foreach ($items as $item) {

            Order_item::create([
                'quantity' => $item->quantity,
                'price' => $item->price,
                'total_price' => $item->total_price,
                'product_id' => $item->id,
                'order_id' => $order->id,
            ]);
        }
    }

    public function updateObject(object $order, $orderDTO)
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
        return Order::all();
    }
    public function getObject($id): object
    {
        return Order::findOrFail($id);
    }
}
