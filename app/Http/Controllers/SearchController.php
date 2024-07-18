<?php

namespace App\Http\Controllers;

use App\Repository\Interface\ICartRepository;
use App\Repository\Interface\IProductRepository;
use Illuminate\Http\Request;
use Jackiedo\Cart\Facades\Cart;

class SearchController extends Controller
{
    protected $productRepository;
    protected $cartRepository;

    public function __construct(IProductRepository $productRepository, ICartRepository $cartRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function searchProduct(Request $request)
    {
        $products = $this->productRepository->getAll();

        
        $cart =   [
            'products' => $products,
            'total' => Cart::name('shopping')->getDetails()->quantities_sum,
            'items' => Cart::name('shopping')->getDetails()->items,
            'sub_total' => Cart::name('shopping')->getSubtotal(),
            'grand_total' => Cart::name('shopping')->getTotal(),
        ];


        // $cart = $this->cartRepository->insertCart($products);
        $results = $this->productRepository->productFind($request->search);
        return view('results' , $cart, ['results' => $results]);

    }

    public function resultShow()
    {
    }
}
