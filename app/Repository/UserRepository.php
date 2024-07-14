<?php

namespace App\Repository;
use App\Repository\Interface\IUserRepository;
use App\Http\Requests\CreateUserRequest;
use App\DTO\UserDTO;
use App\Models\User;

class UserRepository implements IUserRepository {


    public function createObject($createUserRequest) 
{

   return User::create($createUserRequest);

    // if (User::create($userDTO->toArray())) {

    //     return true;
    // }
    // return false;
}

public function updateObject(UserDTO $userDTO , $id) : bool {

    

    if (User::update($userDTO->toArray())) {

        return true;
    }
    return false;

}


public function getAll(){

    return User::all();

}

public function getObject($id) : object {

    return User::findOrFail($id);


}

// public function deleteObject($id): bool {
//     if(User::destroy($id)){
//         return true;
//     }


}


