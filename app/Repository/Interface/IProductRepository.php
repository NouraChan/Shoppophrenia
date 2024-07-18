<?php

namespace App\Repository\Interface;
use App\DTO\ProductDTO;


interface IProductRepository {

    public function createObject($createProductRequest) ;

    public function updateObject(object $product, $productDTO) ;


    public function getAll();

    public function getObject($id) : object;

    public function productFind(string $search);

}

