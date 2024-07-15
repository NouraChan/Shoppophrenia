<?php

namespace App\Repository\Interface;
use App\DTO\ProductDTO;


interface IProductRepository {


    public function createObject(ProductDTO $productDTO) : bool;

    public function updateObject(ProductDTO $productDTO , $id) : bool;


    public function getAll();

    public function getObject($id) : object;

}

