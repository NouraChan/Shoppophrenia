<?php

namespace App\Repository\Interface;
use App\DTO\UserDTO;


interface IUserRepository {

    
    public function createObject($createUserRequest) ;

    public function updateObject(UserDTO $userDTO , $id) : bool;


    public function getAll();

    public function getObject($id) : object;

    // public function deleteObject($id): bool;
}

