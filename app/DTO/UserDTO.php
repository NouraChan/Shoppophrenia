<?php

namespace App\DTO;

use App\Http\Requests\CreateUserRequest;
use Spatie\LaravelData\Data;

class UserDTO extends Data
{

    public function __construct(
        public string $username,
        public string $first_name,
        public string $last_name,
        public string $role,
        public string $gender,
        public string $user_img,
        public string $address,
        public string $email,
        protected string $serial_key,
        public string $phone_number,
        protected string $password,
        public string $fullname,
        public string $birthday ,

    ) {
        $this->password = bcrypt($password);
    }

    public static function handleData(CreateUserRequest $createUserRequest) : array
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
            'birthday' => $createUserRequest->birthday,
        ];

        if ($createUserRequest->user_img) {
            $img = $createUserRequest->user_img;
            $newimg = time() . $img->getClientOriginalName();
            $img->move('img/userimg/', $newimg);
            $data['user_img'] = 'img/userimg/' . $newimg;
        }

        return $data;

    }

}

