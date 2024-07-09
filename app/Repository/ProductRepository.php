<?php

namespace App\Repository;
use App\Repository\Interface\IProductRepository;
use App\DTO\ProductDTO;
use App\Models\Product;

class ProductRepository implements IProductRepository {

    public function createProduct(ProductDTO $productDTO) : bool
    {
        
        if (Product::create($productDTO->toArray())) {

            return true;
        }
return false;
}
}

