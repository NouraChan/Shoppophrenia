<?php

namespace App\Http\Controllers;

use App\Repository\Interface\IProductRepository;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected $productRepository;

    public function __construct(IProductRepository $productRepository){
        $this->productRepository = $productRepository;
    }

    public function searchProduct(Request $request){

        dd($this->productRepository->productFind($request->search));
        return view('results');

    }

    public function resultShow(){
    }
}
