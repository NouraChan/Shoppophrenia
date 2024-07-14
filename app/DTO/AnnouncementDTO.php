<?php

namespace App\DTO;

use App\Http\Requests\CreateAnnouncementRequest;
use Spatie\LaravelData\Data;

class AnnouncementDTO extends Data {

    public function __construct(
        public string $title ,
        public string $content,
        public string $image,
    )
    {

    }

    public static function handleData(CreateAnnouncementRequest $createAnnouncementRequest) : array
    {

        $data = [
            'title' => $createAnnouncementRequest->title,
            'content' => $createAnnouncementRequest->content,
            'image' => $createAnnouncementRequest->image,
            'user_id' => $createAnnouncementRequest->user_id,
               ];

        if ($createAnnouncementRequest->image) {
            $img = $createAnnouncementRequest->image;
            $newimg = time() . $img->getClientOriginalName();
            $img->move('img/announcementimg/', $newimg);
            $data['image'] = 'img/announcementimg/$newimg/' . $newimg;
        }
        return $data;
    }

}

