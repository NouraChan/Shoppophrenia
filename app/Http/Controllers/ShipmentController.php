<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interface\IShipmentRepository;
use App\DTO\ShipmentDTO;
use App\Http\Requests\CreateShipmentRequest;

class ShipmentController extends Controller
{  
    protected $shipmentRepository;

    public function __construct(IShipmentRepository $shipmentRepository){
        $this->shipmentRepository = $shipmentRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shipments = $this->shipmentRepository->getAll();

        return view('admindashboard.shipments.index', ['shipments' => $shipments]);
  
    }

  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admindashboard.shipments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateShipmentRequest $createShipmentRequest)
    {
       
        $shipment = ShipmentDTO::handleData($createShipmentRequest);
        $this->shipmentRepository->createObject($shipment);
        

        return redirect()->route('shipment.index');

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

        $shipment = $this->shipmentRepository->getObject($id);
        return view('admindashboard.shipments.edit', ['shipment' => $shipment]);    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateShipmentRequest $createShipmentRequest, string $id)
    {
        $shipment = $this->shipmentRepository->getObject($id);
        $shipmentDTO = ShipmentDTO::handleData($createShipmentRequest);
        $updated = $this->shipmentRepository->updateObject($shipment, $shipmentDTO);


        return redirect()->route('shipments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shipment = $this->shipmentRepository->getObject($id);
        $shipment->delete();
        return redirect()->back();   }
}
