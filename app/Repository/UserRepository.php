<?php

namespace App\Repository;
use App\Repository\Interface\IUserRepository;
use App\Http\Requests\CreateUserRequest;
use App\DTO\UserDTO;
use App\Enums\role;
use DB;
use App\Models\User;

class UserRepository implements IUserRepository {


    public function createObject($createuserRequest)
    {
        return User::create($createuserRequest);
    }

    public function updateObject(object $user, $userDTO) :object
    {

    return $user->update(['name' => $userDTO['name']]);
            
    }


    public function getAll()
    {
        return User::all();
    }
    public function getObject($id): object
    {
        return User::findOrFail($id);
    }

}
