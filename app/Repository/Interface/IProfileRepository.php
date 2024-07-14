<?php

namespace App\Repository\Interface;


interface IProfileRepository {

      
    public function createObject($createUserRequest) ;

    public function updateObject($createProfileRequest , $id) ;


    public function getAll();

    public function getObject($id) : object;


}

