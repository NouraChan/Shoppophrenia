<?php

namespace App\Repository;
use App\Repository\Interface\IUserRepository;
use App\DTO\UserDTO;
use App\Models\User;

class UserRepository implements IUserRepository {

    public function createUser(UserDTO $userDTO) : bool
    {
        
        if (User::create($userDTO->toArray())) {

            return true;
        }
return false;
}
}

