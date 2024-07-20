<?php

namespace App\Repository;

use App\Repository\Interface\IProductRepository;
use App\Models\Product;

class ProductRepository implements IProductRepository
{

    public function createObject($createproductRequest)
    {
        return Product::create($createproductRequest);
    }

    public function updateObject(object $product, $productDTO)
    {

        return $product->update([
            'name' => $productDTO['name'],
            'description' => $productDTO['description'],
            'rate' => $productDTO['rate'],
            'stock' => $productDTO['stock'],
            'price' => $productDTO['price'],
            'genre_id' => $productDTO['genre_id'],
            'product_img' => $productDTO['product_img'],
        ]);

    }


    public function getAll()
    {
        return Product::all();
    }
    public function getObject($id): object
    {
        return Product::findOrFail($id);
    }

    public function productFind(string $search)
    {

        $search = trim($search);
        $search = stripcslashes($search);
        $search = htmlspecialchars($search);

        return Product::where('name', 'like', "%$search%")->get();

    }

}
