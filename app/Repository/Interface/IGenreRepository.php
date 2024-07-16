<?php

namespace App\Repository\Interface;
use App\DTO\GenreDTO;
use App\Http\Requests\CreateCartRequest;

interface IGenreRepository {

    public function createObject($createGenreRequest) ;

    public function updateObject(object $genre, $genreDTO) :object;


    public function getAll();

    public function getObject($id) : object;

}

