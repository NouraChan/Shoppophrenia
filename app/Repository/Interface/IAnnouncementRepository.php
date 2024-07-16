<?php

namespace App\Repository\Interface;
use App\DTO\AnnouncementDTO;


interface IAnnouncementRepository {

    
   
    public function createObject($createAnnouncementRequest) ;

    public function updateObject($createAnnouncementRequest , $id);


    public function getAll();

    public function getObject($id) : object;

    // public function deleteObject($id): bool;

}

