<?php

namespace App\Repository\Interface;
use App\DTO\GenreDTO;

interface IGenreRepository {

    public function createObject(GenreDTO $genreDTO) : bool;

    public function updateObject(GenreDTO $genreDTO , $id) : bool;


    public function getAll();

    public function getObject($id) : object;

    public function deleteObject($id): bool;



}

