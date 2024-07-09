<?php

namespace App\Repository;
use App\Repository\Interface\IPaymentRepository;
use App\DTO\PaymentDTO;
use App\Models\Payment;

class PaymentRepository implements IPaymentRepository {

    public function createPayment(PaymentDTO $paymentDTO) : bool
    {
        
        if (Payment::create($paymentDTO->toArray())) {

            return true;
        }
return false;
}
}

