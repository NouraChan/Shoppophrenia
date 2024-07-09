<?php

namespace App\Repository\Interface;
use App\DTO\AnnouncementDTO;


interface IAnnouncementRepository {

    public function createAnnouncement(AnnouncementDTO $announcementDTO): bool;

}

