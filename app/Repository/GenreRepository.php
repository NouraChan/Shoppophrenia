<?php

namespace App\Repository;

use App\Repository\Interface\IGenreRepository;
use App\DTO\GenreDTO;
use App\Models\Genre;

class GenreRepository implements IGenreRepository
{

    public function createObject(GenreDTO $genreDTO): bool
    {
        if (Genre::create($genreDTO->toArray())) {

            return true;
        }
        return false;
    }

    public function updateObject(GenreDTO $genreDTO, $id): bool
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
    // public function store(GenreDTO $genreDTO): bool
    // {
    //     return (Genre::create($genreDTO->toArray())) ? true : false;
    // }

    public function deleteObject($id): bool
    {
        if (Genre::destroy($id)) {

            return true;
        }
        return false;
    }
}

