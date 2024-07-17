<?php

namespace App\Repository\Interface;
use App\DTO\GenreDTO;
use App\Http\Requests\CreateCartRequest;
use App\Enums\Genres;

interface IGenreRepository {

    public function createObject($createGenreRequest) ;

    public function updateObject(object $genre, $genreDTO) ;


    public function getAll();

    public function getObject($id) : object;

    // public function getCount(Genres $genres):string ;


}

