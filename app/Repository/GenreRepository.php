<?php

namespace App\Repository;

use App\Repository\Interface\IGenreRepository;
use App\DTO\GenreDTO;
use App\Models\Genre;

class GenreRepository implements IGenreRepository
{

    public function createObject($createGenreRequest)
    {
        return Genre::create($createGenreRequest);
    }

    public function updateObject(GenreDTO $genreDTO, $id)
    {
        if (Genre::edit($genreDTO->toArray())) {

            return true;
        }
        return false;
    }


    public function getAll()
    {
        return Genre::all();
    }
    public function getObject($id): object
    {
        return Genre::findOrFail($id);
    }

    // public function deleteObject($id): bool
    // {
    //     if (Genre::destroy($id)) {

    //         return true;
    //     }
    //     return false;
    // }
}

