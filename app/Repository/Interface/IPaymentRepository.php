<?php

namespace App\Repository\Interface;
use App\DTO\PaymentDTO;


interface IPaymentRepository {


    public function createObject($createPaymentRequest) ;

    public function updateObject($createPaymentRequest , $id);


    public function getAll();

    public function getObject($id) : object;
    // public function deleteObject($id): bool;
}

