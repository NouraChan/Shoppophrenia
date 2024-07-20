<?php

namespace App\DTO;

use App\Http\Requests\CreateAnnouncementRequest;
use Spatie\LaravelData\Data;
use Auth;

class AnnouncementDTO extends Data
{

    public function __construct(
        public string $title,
        public string $content,
        public string $image,
        public string $user_id
    ) {

    }

    public static function handleData(CreateAnnouncementRequest $createAnnouncementRequest): array
    {

        $data = [
            'title' => $createAnnouncementRequest->title,
            'content' => $createAnnouncementRequest->content,
            // 'image' => $createAnnouncementRequest->image,
            'user_id' => Auth::id(),
        ];

        if ($createAnnouncementRequest->image) {
            $img = $createAnnouncementRequest->image;
            $newimg = time() . $img->getClientOriginalName();
            $img->move('img/announcementimg/', $newimg);
            $data['image'] = 'img/announcementimg/' . $newimg;
        }

       foreach($data as $dat => $val){

            $data["$dat"] = trim($data["$dat"]);
            $data["$dat"] = stripcslashes($data["$dat"]);
            $data["$dat"] = htmlspecialchars($data["$dat"]);
            return $data;
        }

        return $data;
    }

}

