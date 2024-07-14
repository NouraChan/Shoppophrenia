<?php

namespace App\DTO;

use App\Http\Requests\CreateProfileRequest;
use Spatie\LaravelData\Data;

class ProfileDTO extends Data {

        public function __construct(
            public string $first_name,
            public string $last_name,
            public string $role,
            public string $gender,
            public string $user_img,
            public string $address,
            protected string $serial_key,
            public string $phone_number,
            public string $fullname,
            public string $user_id,
            public string $birthday,
        ) {
        }
    
        public static function handleData(CreateProfileRequest $createProfileRequest) : array
        {
    
            $data = [
                'first_name' => $createProfileRequest->first_name,
                'last_name' => $createProfileRequest->last_name,
                // 'username' => $createProfileRequest->username,
                'user_id' => $createProfileRequest->user_id,
                'birthday' => $createProfileRequest->birthday,
                'role' => $createProfileRequest->role,
                'gender' => $createProfileRequest->gender,
                'user_img' => $createProfileRequest->user_img,
                'address' => $createProfileRequest->address,
                'serial_key' => $createProfileRequest->serial_key,
                'phone_number' => $createProfileRequest->phone_number,
                'fullname' => $createProfileRequest->first_name . " " . $createProfileRequest->last_name,
    
            ];
    
            if ($createProfileRequest->user_img) {
                $img = $createProfileRequest->user_img;
                $newimg = time() . $img->getClientOriginalName();
                $img->move('img/userimg/', $newimg);
                $data['user_img'] = 'img/userimg/' . $newimg;
            }
    
            return $data;
        }
}

