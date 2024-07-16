<?php

namespace App\Repository\Interface;
use App\DTO\ProductDTO;


interface IProductRepository {


    public function createObject($createProductRequest) ;

    public function updateObject($createProductRequest , $id);


    public function getAll();

    public function getObject($id) : object;
}

