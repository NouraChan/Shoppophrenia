<?php

namespace App\Repository;

use App\Repository\Interface\IProductRepository;
use App\DTO\ProductDTO;
use App\Models\Product;

class ProductRepository implements IProductRepository
{

    public function createObject(ProductDTO $productDTO): bool
    {

        if (Product::create($productDTO->toArray())) {

            return true;
        }
        return false;
    }
    public function updateObject(ProductDTO $productDTO, $id): bool
    {  if (Product::edit($productDTO->toArray())) {

        return true;
    }
    return false;

    }
    public function getAll()
    {
        return Product::all();
    }
    public function getObject($id): object
    {
        return Product::findOrFail($id);
    }

}


