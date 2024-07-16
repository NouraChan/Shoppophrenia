<?php

namespace App\Repository;
use App\Repository\Interface\IPaymentRepository;
use App\DTO\PaymentDTO;
use App\Models\Payment;

class PaymentRepository implements IPaymentRepository {

    public function createObject($createpaymentRequest)
    {
        return Payment::create($createpaymentRequest);
    }

    public function updateObject(object $payment, $paymentDTO) :object
    {

    return $payment->update(['name' => $paymentDTO['name']]);
            
    }


    public function getAll()
    {
        return Payment::all();
    }
    public function getObject($id): object
    {
        return Payment::findOrFail($id);
    }

}
