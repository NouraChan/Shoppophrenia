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

    public function updateObject(object $genre, $genreDTO) :object
    {

    return $genre->update(['name' => $genreDTO['name']]);
            
    }


    public function getAll()
    {
        return Genre::all();
    }
    public function getObject($id): object
    {
        return Genre::findOrFail($id);
    }

}

