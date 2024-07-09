<?php

namespace App\Repository;
use App\Repository\Interface\ICategoryRepository;
use App\DTO\CategoryDTO;
use App\Models\Category;

class CategoryRepository implements ICategoryRepository {

    public function createCategory(CategoryDTO $categoryDTO) : bool
    {
        
        if (Category::create($categoryDTO->toArray())) {

            return true;
        }
return false;
}
}

