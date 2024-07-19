<?php

namespace App\Enums;


enum PaymentType : string {

  case CREDIT = 'credit';
  case CASH = 'cash';
  case PAYPAL = 'paypal';
  case CHECK = 'check';

}

