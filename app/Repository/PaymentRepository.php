<?php

namespace App\Repository;

use App\Repository\Interface\IPaymentRepository;
use App\DTO\PaymentDTO;
use App\Models\Payment;

class PaymentRepository implements IPaymentRepository
{

    public function createObject($createpaymentRequest)
    {
        return Payment::create($createpaymentRequest);
    }

    public function updateObject(object $payment, $paymentDTO): object
    {

        return $payment->update([
            'method' => $paymentDTO['method'],
            'amount' => $paymentDTO['amount'],
            'customer_id' => $paymentDTO['customer_id'],
            'payment_date' => $paymentDTO['payment_date'],
        ]);

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
