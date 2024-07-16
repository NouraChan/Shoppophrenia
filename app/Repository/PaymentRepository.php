<?php

namespace App\Repository;
use App\Repository\Interface\IPaymentRepository;
use App\DTO\PaymentDTO;
use App\Models\Payment;

class PaymentRepository implements IPaymentRepository {

    public function createObject($createPaymentRequest)
    {
        return Payment::create($createPaymentRequest);
    }

    public function updateObject($createPaymentRequest, $id)
    {
        // if (Genre::edit($genreDTO->toArray())) {

        //     return true;
        // }
        // return false;
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
