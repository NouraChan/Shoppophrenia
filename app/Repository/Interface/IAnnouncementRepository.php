<?php

namespace App\Repository\Interface;
use App\DTO\AnnouncementDTO;


interface IAnnouncementRepository {

    
    public function createObject(AnnouncementDTO $announcementDTO) : bool;

    public function updateObject(AnnouncementDTO $announcementDTO , $id) : bool;


    public function getAll();

    public function getObject($id) : object;

    public function deleteObject($id): bool;

}

