<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class AnnouncementDTO extends Data {

    public function __construct(
        public string $title ,
        public string $content,
        public string $image,
    )
    {

    }

}

