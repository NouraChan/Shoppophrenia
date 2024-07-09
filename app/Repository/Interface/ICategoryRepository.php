<?php

namespace App\Repository\Interface;
use App\DTO\CategoryDTO;

interface ICategoryRepository {

    public function createCategory(CategoryDTO $categoryDTO) : bool;

}

