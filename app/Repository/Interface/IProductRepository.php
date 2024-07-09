<?php

namespace App\Repository\Interface;
use App\DTO\ProductDTO;


interface IProductRepository {

    public function createProduct(ProductDTO $productDTO) : bool;

}

