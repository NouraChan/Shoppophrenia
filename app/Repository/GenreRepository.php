<?php

namespace App\Repository;
use App\Repository\Interface\IGenreRepository;
use App\DTO\GenreDTO;
use App\Models\Genre;

class GenreRepository implements IGenreRepository {

    public function createGenre(GenreDTO $genreDTO) : bool
    {
        
        if (Genre::store($genreDTO->toArray())) {

            return true;
        }
return false;
}
}

