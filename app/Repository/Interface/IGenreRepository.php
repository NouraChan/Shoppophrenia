<?php

namespace App\Repository\Interface;
use App\DTO\GenreDTO;

interface IGenreRepository {

    public function createObject($createGenreRequest) ;

    public function updateObject($createGenreRequest , $id);


    public function getAll();

    public function getObject($id) : object;

    // public function deleteObject($id): bool;



}

