<?php

namespace App\Repository;
use App\Repository\Interface\IQueryRepository;
use DB;


class QueryRepository implements IQueryRepository {


    public function getRomance($products){
        $products =DB::table('product')->where('genre_id' ,'=' ,'1')->get();

        return $products;
    }
    public function getFantacy($products){
        $products =DB::table('product')->where('genre_id' ,'=' ,'2')->get();

        return $products;
    }
    public function getMystery($products){
        $products =DB::table('product')->where('genre_id' ,'=' ,'3')->get();

        return $products;
    }
    public function getEducational($products){
        $products =DB::table('product')->where('genre_id' ,'=' ,'8')->get();

        return $products;
    }
    public function getHistorical($products){
        $products =DB::table('product')->where('genre_id' ,'=' ,'5')->get();

        return $products;
    }
    public function getDrama($products){
        $products =DB::table('product')->where('genre_id' ,'=' ,'6')->get();

        return $products;
    }
    public function getFictions($products){
        $products =DB::table('product')->where('genre_id' ,'=' ,'7')->get();

        return $products;
    }
    public function getHorror($products){
        $products =DB::table('product')->where('genre_id' ,'=' ,'4')->get();

        return $products;
    }


}
// $genre = Genre::all();
// $products =DB::table('product')->where($genreid);

// dd($products);
