<?php

namespace App\Http\Controllers;

use App\Repository\Interface\ICartRepository;
use App\Repository\Interface\IGenreRepository;
use Illuminate\Http\Request;
use App\Repository\Interface\IProductRepository;
use App\DTO\ProductDTO;
use App\Http\Requests\CreateProductRequest;
use Jackiedo\Cart\Facades\Cart;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    protected $productRepository;

    protected $genreRepository;
    protected $cart;

    public function __construct(IProductRepository $productRepository, ICartRepository $cartRepository, IGenreRepository $genreRepository)
    {
        $this->productRepository = $productRepository;
        $this->cartRepository = $cartRepository;
        $this->genreRepository = $genreRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productRepository->getAll();

        return view('admindashboard.products.index', ['products' => $products] );


    }

    /**
     * Show the form for creating a new resource.
     */

    
    public function create()
    {
        $genres = $this->genreRepository->getAll();
        return view('admindashboard.products.create' , ['genres' => $genres ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $createProductRequest)
    {
        $product = ProductDTO::handleData($createProductRequest);
        $this->productRepository->createObject($product);
        return redirect()->route('product.index');

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = $this->productRepository->getObject($id);
        $product->delete();
        return redirect()->back();
    }
}
