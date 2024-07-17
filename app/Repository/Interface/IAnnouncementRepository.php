<?php

namespace App\Repository\Interface;
use App\DTO\AnnouncementDTO;


interface IAnnouncementRepository {

    
    public function createObject($createAnnouncementRequest) ;

    public function updateObject(object $announcement, $announcementDTO);


    public function getAll();

    public function getObject($id) : object;

}

