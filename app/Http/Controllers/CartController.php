<?php

namespace App\Http\Controllers;

// use App\Models\Cart;
use App\Repository\Interface\IProductRepository;
use Illuminate\Http\Request;
use App\Repository\Interface\ICartRepository;
use Jackiedo\Cart\Facades\Cart;
use RealRashid\SweetAlert\Facades\Alert;



class CartController extends Controller
{
    protected $cartRepository;
    protected $productRepository;
    protected $cart;




    public function __construct(ICartRepository $cartRepository, IProductRepository $productRepository)
    {
        $this->cartRepository = $cartRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = $this->cartRepository->getAll();

        return view('admindashboard.carts.index', ['carts' => $carts]);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admindashboard.carts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        return redirect() - back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {return view('cart.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function add($id)
    {
        $product = $this->productRepository->getObject($id);
        Cart::addItem([
            'id' => $product->id,
            'title' => $product->name,
            'price' => $product->price,
            'stock' => $product->stock,
            'description' => $product->description,
            'gwnre_id' => $product->gwnre_id,
            'rate' => $product->rate,
            'product_img' => $product->product_img,
        ]);


        Alert::success('success', 'New product added to the cart');

        return redirect()->back();

    }

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
        $cart = $this->cartRepository->getObject($id);
        $cart->delete();
        return redirect()->back();
    }

    public function showHome()
    {

        $products = $this->productRepository->getAll();

        return view(
            'index',
            [
                'products' => $products,
                'total' => Cart::getDetails()->quantities_sum,
                'items' => Cart::getDetails()->items,
            ]
        );


    }
}

