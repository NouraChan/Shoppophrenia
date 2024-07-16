<?php

namespace App\Repository\Interface;
use App\Enums\role;

use App\DTO\UserDTO;


interface IUserRepository
{


    public function createObject($createUserRequest);

    public function updateObject(object $user, $userDTO): object;


    public function getAll();

    public function getObject($id): object;

    public function roleCall(role $role);

    public function getCount(role $role);

    public function limitedGet(int $limit);

    public function getAuth();


}

//user for filter
//    public function limitedGetWithRole(role $role, int $limit);{
// return User::where('role' , $role->value)->limit($limit)->get() ; }
