<?php

namespace App\Repository;

use App\DTO\AnnouncementDTO;
use App\Models\Announcement;
use App\Repository\Interface\IAnnouncementRepository;

class AnnouncementRepository implements IAnnouncementRepository
{

    public function createObject($createannouncementRequest)
    {
        return Announcement::create($createannouncementRequest);
    }

    public function updateObject(object $announcement, $announcementDTO): object
    {

        return $announcement->update([
            'title' => $announcementDTO['title'],
            'image' => $announcementDTO['content'],
            'user_id' => $announcementDTO['user_id'],
            'content' => $announcementDTO['content'],
        ]);

    }


    public function getAll()
    {
        return Announcement::all();
    }
    public function getObject($id): object
    {
        return Announcement::findOrFail($id);
    }


}

