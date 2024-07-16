<?php

namespace App\Repository\Interface;
use App\DTO\UserDTO;


interface IUserRepository {

    
    public function createObject($createUserRequest) ;

    public function updateObject(object $user, $userDTO) :object;


    public function getAll();

    public function getObject($id) : object;
}

