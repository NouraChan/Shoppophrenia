<?php

namespace App\Enums;


enum OrderStatus : string {

  case INPROGRESS = 'inprogress' ;
  case RETURNED = 'returned';
  case COMPLETED = 'delivered';

}

