<?php

namespace App\Repository;

use App\Repository\Interface\IProductRepository;
use App\DTO\ProductDTO;
use App\Models\Product;

class ProductRepository implements IProductRepository
{

    public function createObject($createproductRequest)
    {
        return Product::create($createproductRequest);
    }

    public function updateObject(object $product, $productDTO) :object
    {

    return $product->update(['name' => $productDTO['name']]);
            
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
