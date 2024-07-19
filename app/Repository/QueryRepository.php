<?php

namespace App\Repository;
use App\Repository\Interface\IQueryRepository;
use DB;


class QueryRepository implements IQueryRepository {


    public function getRomance($products){
        $products =DB::table('product')->where('genre_id' ,'=' ,'1')->get();

        return $products;
    }


}

