<?php

namespace App\Repository\Interface;
use App\DTO\UserDTO;


interface IUserRepository {

    public function createUser(UserDTO $userDTO) : bool;


    
    // public function getAll();

    // public function store($createUser) ;


}

