<?php

namespace App\Repository;

use App\DTO\AnnouncementDTO;
use App\Models\Announcement;
use App\Repository\Interface\IAnnouncementRepository;

class AnnouncementRepository implements IAnnouncementRepository
{

    public function createObject(AnnouncementDTO $announcementDTO): bool
    {

        if (Announcement::create($announcementDTO->toArray())) {

            return true;
        }
        return false;
    }

    public function updateObject(AnnouncementDTO $announcementDTO , $id) : bool {

        if (Announcement::update($announcementDTO->toArray())) {

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

    public function deleteObject($id): bool {

    }
}

