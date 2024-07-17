<?php

namespace App\Repository\Interface;


interface IProfileRepository {

      
   
    public function createObject($createProfileRequest) ;

    public function updateObject($createProfileRequest , $id);


    public function getAll();

    public function getObject($id) : object;

}

