<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class PaymentDTO extends Data {

    public function __construct(
        public string $method ,
        public string $amount,
        public string $payment_date,
    )
    {

    }

}

