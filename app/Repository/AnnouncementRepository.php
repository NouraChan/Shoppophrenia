<?php

namespace App\Repository;

use App\DTO\AnnouncementDTO;
use App\Models\Announcement;
use App\Repository\Interface\IAnnouncementRepository;

class AnnouncementRepository implements IAnnouncementRepository
{

    public function createObject($createAnnouncementRequest)
    {

        // if (Announcement::create($announcementDTO->toArray())) {

        //     return true;
        // }
        // return false;
    }

    public function updateObject($createAnnouncementRequest , $id) {

        if (Announcement::update($createAnnouncementRequest->toArray())) {

            return true;
        }
        return false;

    }


    public function getAll(){

        return Announcement::all();

    }

    public function getObject($id) : object {

        return Announcement::findOrFail($id);


    }

  
}

