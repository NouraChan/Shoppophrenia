<?php

namespace App\Repository;

use App\Repository\Interface\IOrderRepository;
use App\DTO\OrderDTO;
use App\Models\Order;
use Auth;
use Jackiedo\Cart\Facades\Cart;

class OrderRepository implements IOrderRepository
{

    public function placeOrder()
    {
        dd($cart = Cart::name('shopping')->getDetails());

        // dd(typeOf($cart));
        $order = 
        [ 
            'total_price' => $cart->total ,
            'customer_id' =>Auth::id() ,
            // 'order_id' =>$order->id,
        ];
        

    }
    public function createObject($createorderRequest)
    {
        
        return Order::create($createorderRequest);

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
