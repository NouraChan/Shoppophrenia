<?php

namespace App\Repository\Interface;
use App\DTO\PaymentDTO;


interface IPaymentRepository {

    public function createObject($createPaymentRequest) ;

    public function updateObject(object $payment, $paymentDTO) ;


    public function getAll();

    public function getObject($id) : object;
}

