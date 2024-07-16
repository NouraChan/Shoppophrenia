<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interface\IPaymentRepository;
use App\Http\Requests\CreatePaymentRequest;
use App\DTO\PaymentDTO;

class PaymentController extends Controller
{
    protected $paymentRepository;

     public function __construct(IPaymentRepository $paymentRepository){
        $this->paymentRepository = $paymentRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = $this->paymentRepository->getAll();

        return view('admindashboard.payments.index', ['payments' => $payments]);
  
    }

    /**
     * Show the form for creating a new resource.
     */
   
    public function create()
    {
        return view('admindashboard.payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePaymentRequest $createPaymentRequest)
    {
       
        $payment = PaymentDTO::handleData($createPaymentRequest);
        $this->paymentRepository->createObject($payment);
        

        return redirect()->route('payment.index');

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

        $payment = $this->paymentRepository->getObject($id);
        return view('admindashboard.payments.edit', ['payment' => $payment]);    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePaymentRequest $createPaymentRequest, string $id)
    {
        $payment = $this->paymentRepository->getObject($id);
        $paymentDTO = PaymentDTO::handleData($createPaymentRequest);
        $updated = $this->paymentRepository->updateObject($payment, $paymentDTO);


        return redirect()->route('payments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payment = $this->paymentRepository->getObject($id);
        $payment->delete();
        return redirect()->back();    }
}
