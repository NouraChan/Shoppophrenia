<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class UserDTO extends Data {

    public function __construct(
        public string $username ,
        public string $first_name,
        public string $last_name ,
        public string $role ,
        public string $gender ,
        public string $user_img ,
        public string $address ,
        public string $email ,
        public string $serial_key ,
        public string $phone_number ,
        protected string $password ,


    )
    {

    }

}

