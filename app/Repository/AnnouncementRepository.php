<?php

namespace App\Repository;
use App\DTO\AnnouncementDTO;
use App\Models\Announcement;
use App\Repository\Interface\IAnnouncementRepository;

class AnnouncementRepository implements IAnnouncementRepository {

    public function createAnnouncement(AnnouncementDTO $announcementDTO) : bool
    {
        
        if (Announcement::create($announcementDTO->toArray())) {

            return true;
        }
return false;
}
}

