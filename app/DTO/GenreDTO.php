<?php

namespace App\DTO;

use App\Http\Requests\CreateGenreRequest;
use Spatie\LaravelData\Data;

class GenreDTO extends Data
{

    public function __construct(
        public string $name,
    ) {
    }
    public static function handleData(CreateGenreRequest $createGenreRequest): array
    {

        $data = [
            'name' => $createGenreRequest->name
        ];
        foreach($data as $dat => $val){

            $data["$dat"] = trim($data["$dat"]);
            $data["$dat"] = stripcslashes($data["$dat"]);
            $data["$dat"] = htmlspecialchars($data["$dat"]);
            return $data;
        }
      
        return $data;
    }
}

  // if ($createGenreRequest->img){
        //     $img = $createGenreRequest->img;
        //     $newimg = time() . $img->getClientOriginalName();
        //     $img->move('img/userimg/' , $newimg);
        //     $data['image'] = 'img/userimg/$newimg/'. $newimg ;
        // }













// function filterData(array $data) : array {

//         $data = trim($data[0]);
//         $data = stripcslashes($data[0]);
//         $data = htmlspecialchars($data[0]);
//         return $data;
// }
