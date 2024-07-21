<?php

namespace App\Http\Controllers;

use App\DTO\OrderDTO;
use Illuminate\Http\Request;
use App\Repository\Interface\IOrderRepository;
use App\Repository\Interface\IShipmentRepository;
use App\Repository\Interface\IPaymentRepository;
use App\Repository\Interface\IUserRepository;
use App\Repository\Interface\IProductRepository;
use App\Repository\Interface\ICartRepository;


use App\Http\Requests\CreateOrderRequest;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class OrdersController extends Controller
{
    protected $cartRepository;

    protected $orderRepository;
    protected $userRepository;
    protected $paymentRepository;
    protected $productRepository;
    protected $shipmentRepository;

    public function __construct(IOrderRepository $orderRepository,ICartRepository $cartRepository, IProductRepository $productRepository, IUserRepository $userRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
        $this->userRepository = $userRepository;
        $this->cartRepository = $cartRepository;




    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = $this->orderRepository->getAll();

        return view('admindashboard.orders.index', ['orders' => $orders]);
  
    }

    /**
     * Show the form for creating a new resource.
     */
  
    public function create()
    {
        return view('admindashboard.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateOrderRequest $createOrderRequest)
    {
       
        $order = OrderDTO::handleData($createOrderRequest);
        $this->orderRepository->createObject($order);

        Alert::success('Yay!, You have placed an order, look forward for its arrival. Thanks for shopping with us');
        $this->cartRepository->clearCart();
        
        return redirect()->route('order.show' , [ 'id' => Auth::id()]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orders = $this->orderRepository->getObject(Auth::id());
        return view('orders.show', [ 'id' => Auth::id()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $order = $this->orderRepository->getObject($id);
        return view('admindashboard.orders.edit', ['order' => $order]);    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateOrderRequest $createOrderRequest, string $id)
    { $order = $this->orderRepository->getObject($id);
        $orderDTO = OrderDTO::handleData($createOrderRequest);
        $updated = $this->orderRepository->updateObject($order, $orderDTO);

        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = $this->orderRepository->getObject($id);
        $order->delete();
        return redirect()->back();    }
}
