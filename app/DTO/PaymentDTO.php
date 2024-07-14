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

    public static function handleData(CreateUserRequest $createUserRequest)
    {

        $data = [
            'first_name' => $createUserRequest->first_name,
            'last_name' => $createUserRequest->last_name,
            'username' => $createUserRequest->username,
            'email' => $createUserRequest->email,
            'password' => $createUserRequest->password,
            'role' => $createUserRequest->role,
            'gender' => $createUserRequest->gender,
            'user_img' => $createUserRequest->user_img,
            'address' => $createUserRequest->address,
            'serial_key' => $createUserRequest->serial_key,
            'phone_number' => $createUserRequest->phone_number,
            'fullname' => $createUserRequest->first_name . " " . $createUserRequest->last_name,

        ];

        if ($createUserRequest->user_img) {
            $img = $createUserRequest->user_img;
            $newimg = time() . $img->getClientOriginalName();
            $img->move('img/userimg/', $newimg);
            $data['user_img'] = 'img/userimg/$newimg/' . $newimg;
        }
        return $data;
    }

}

