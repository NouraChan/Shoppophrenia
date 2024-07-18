<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\Interface\ICartRepository;
use App\Repository\Interface\IGenreRepository;
use App\Repository\Interface\IReviewRepository;
use Illuminate\Http\Request;
use App\Repository\Interface\IProductRepository;
use App\DTO\ProductDTO;
use App\Http\Requests\CreateProductRequest;
use Jackiedo\Cart\Facades\Cart;
use RealRashid\SweetAlert\Facades\Alert;



class ProductController extends Controller
{
    protected $productRepository;
    protected $reviewRepository;

    protected $genreRepository;
    protected $cartRepository;

    public function __construct(IProductRepository $productRepository, ICartRepository $cartRepository, IGenreRepository $genreRepository, IReviewRepository $reviewRepository)
    {
        $this->middleware('auth');
        $this->productRepository = $productRepository;
        $this->cartRepository = $cartRepository;
        $this->genreRepository = $genreRepository;
        $this->reviewRepository = $reviewRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productRepository->getAll();

        return view('admindashboard.products.index', ['products' => $products]);


    }

    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {
        $genres = $this->genreRepository->getAll();
        return view('admindashboard.products.create', ['genres' => $genres]);
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
        $genres = $this->genreRepository->getAll();
        $reviews = $this->reviewRepository->getAll();
        $product = $this->productRepository->getObject($id);
        $products = $this->productRepository->getAll();
        $cart = $this->cartRepository->insertCart($products);

        // $targetgenre=

        return view('product.details',$cart , [
            'product' => $product,
            'reviews' => $reviews,
            'genres' => $genres,
            'products' => $products,
            'total' => Cart::getDetails()->quantities_sum,
            'items' => Cart::getDetails()->items,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $product = $this->productRepository->getObject($id);
        return view('admindashboard.products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateProductRequest $createproductRequest, string $id)
    {
        $product = $this->productRepository->getObject($id);
        $productDTO = ProductDTO::handleData($createproductRequest);
        $updated = $this->productRepository->updateObject($product, $productDTO);


        return redirect()->route('product.index');
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
