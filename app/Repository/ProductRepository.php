<?php

namespace App\Repository;

use App\Repository\Interface\IProductRepository;
use App\DTO\ProductDTO;
use App\Models\Product;

class ProductRepository implements IProductRepository
{

    public function createObject($createProductRequest)
    {
        return Product::create($createProductRequest);
    }

    public function updateObject($createProductRequest, $id)
    {
        // if (Genre::edit($genreDTO->toArray())) {

        //     return true;
        // }
        // return false;
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
