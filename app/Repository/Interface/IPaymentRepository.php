<?php

namespace App\Repository\Interface;
use App\DTO\PaymentDTO;


interface IPaymentRepository {

    public function createPayment(PaymentDTO $paymentDTO) : bool;

}

