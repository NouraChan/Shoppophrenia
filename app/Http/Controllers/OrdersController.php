<?php

namespace App\Http\Controllers;

use App\DTO\OrdersDTO;
use Illuminate\Http\Request;
use App\Repository\Interface\IOrdersRepository;
use App\Repository\Interface\IShipmentRepository;
use App\Repository\Interface\IPaymentRepository;
use App\Repository\Interface\IUserRepository;
use App\Repository\Interface\IProductRepository;
use App\Repository\Interface\ICartRepository;


use App\Http\Requests\CreateOrderRequest;
use Auth;

class OrdersController extends Controller
{
    protected $cartRepository;

    protected $ordersRepository;
    protected $userRepository;
    protected $paymentRepository;
    protected $productRepository;
    protected $shipmentRepository;

    public function __construct(IOrdersRepository $ordersRepository,ICartRepository $cartRepository, IProductRepository $productRepository, IUserRepository $userRepository,IPaymentRepository $paymentRepository,IShipmentRepository $shipmentRepository)
    {
        $this->ordersRepository = $ordersRepository;
        $this->shipmentRepository = $shipmentRepository;
        $this->paymentRepository = $paymentRepository;
        $this->productRepository = $productRepository;
        $this->userRepository = $userRepository;
        $this->cartRepository = $cartRepository;




    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = $this->ordersRepository->getAll();

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
       
        $order = OrdersDTO::handleData($createOrderRequest);
        $this->ordersRepository->createObject($order);
        

        return redirect()->route('order.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orders = $this->ordersRepository->getObject(Auth::id());
        return view('orders.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $order = $this->ordersRepository->getObject($id);
        return view('admindashboard.orders.edit', ['order' => $order]);    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateOrderRequest $createOrderRequest, string $id)
    { $order = $this->ordersRepository->getObject($id);
        $orderDTO = OrdersDTO::handleData($createOrderRequest);
        $updated = $this->ordersRepository->updateObject($order, $orderDTO);

        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = $this->ordersRepository->getObject($id);
        $order->delete();
        return redirect()->back();    }
}
