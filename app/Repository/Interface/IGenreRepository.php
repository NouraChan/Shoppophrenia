<?php

namespace App\Repository\Interface;
use App\DTO\GenreDTO;

interface IGenreRepository {

    public function createGenre(GenreDTO $genreDTO) : bool;

}

