<?php

namespace App\Repository\Interface;
use App\DTO\PaymentDTO;


interface IPaymentRepository {


    public function createObject(PaymentDTO $paymentDTO) : bool;

    public function updateObject(PaymentDTO $paymentDTO , $id) : bool;


    public function getAll();

    public function getObject($id) : object;

    public function deleteObject($id): bool;
}

