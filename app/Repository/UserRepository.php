<?php

namespace App\Repository;

use App\Repository\Interface\IUserRepository;
use App\Http\Requests\CreateUserRequest;
use App\DTO\UserDTO;
use App\Enums\role;
use DB;
use App\Models\User;

class UserRepository implements IUserRepository
{


    public function createObject($createuserRequest)
    {
        return User::create($createuserRequest);
    }

    public function updateObject(object $user, $userDTO)
    {

        return $user->update([
            'fullname' => $userDTO['fullname'],
            'first_name' => $userDTO['first_name'],
            'last_name' => $userDTO['last_name'],
            'birthday' => $userDTO['birthday'],
            'address' => $userDTO['address'],
            'role' => $userDTO['role'],
            'gender' => $userDTO['gender'],
            'phone_number' => $userDTO['phone_number'],
            'user_img' => $userDTO['user_img'],
            'serial_key' => $userDTO['serial_key'],
        ]);

    }


    public function getAll()
    {
        return User::all();
    }
    public function getObject($id): object
    {
        return User::findOrFail($id);
    }


    public function roleCall(role $role){

        return User::where('role',$role->value)->get();

    }
    public function getCount(role $role){
        return User::where('role',$role->value)->count();


    }

    public function limitedGet(int $limit){

        return User::all()->limit(5);

    }

    public function getAuth(){

    }

}
