<?php

namespace App\DTO;

use App\Http\Requests\CreateUser;
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
        protected string $serial_key ,
        public string $phone_number ,
        protected string $password ,


    )
    {

    }

    // public static function handleInputs(CreateUser $createuser){

    //     $data = [
    //         'first_name'=> $createuser->first_name,
    //         'last_name'=> $createuser->last_name,
    //         'username' =>  $createuser->username,
    //         'email' =>  $createuser->email,
    //         'password'=>  $createuser->password,
    //         'role'=>  $createuser-> role,
    //         'gender'=>  $createuser-> gender,
    //         'user_img'=> $createuser-> user_img,
    //         'address'=> $createuser-> address,
    //         'serial_key'=> $createuser-> serial_key,
    //         'phone_number'=> $createuser->phone_number,
    //         'fullname' => $createuser->first_name . " " . $createuser->last_name,
    //     ];
    //     return $data;

    // }

}

