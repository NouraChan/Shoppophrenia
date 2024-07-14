<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interface\IOrdersRepository;

class OrdersController extends Controller
{
    protected $ordersRepository;

    public function __construct(IOrdersRepository $ordersRepository){
        $this->ordersRepository = $ordersRepository;
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
    public function store(Request $request)
    {
        //

        return redirect()->route('department.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect()->back();    }
}
