<?php

namespace App\Http\Controllers;

// use App\Models\Cart;
use App\Repository\Interface\IProductRepository;
use App\Repository\Interface\ICartRepository;
use Jackiedo\Cart\Facades\Cart;
use RealRashid\SweetAlert\Facades\Alert;
use App\DTO\CartDTO;
use App\Http\Requests\CreateCartRequest;



class CartController extends Controller
{
    protected $cartRepository;
    protected $productRepository;




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
    public function store(CreateCartRequest $createCartRequest)
    {

        $cart = CartDTO::handleData($createCartRequest);
        $this->cartRepository->createObject($cart);


        return redirect()->route('cart.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $products = $this->productRepository->getAll();

        $cart = $this->cartRepository->insertCart($products);
        return view(
            'cart.show',
            $cart
        );

    }

    /**
     * Show the form for editing the specified resource.
     */

    public function add($id)
    {
        $product = $this->productRepository->getObject($id);

       $this->cartRepository->addToCart($product);

        Alert::success('success', 'New product added to the cart');

        return redirect()->back();

    }

    public function edit(string $id)
    {

        $cart = $this->cartRepository->getObject($id);
        return view('admindashboard.carts.edit', ['cart' => $cart]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateCartRequest $createCartRequest, string $id)
    {
        $cart = $this->cartRepository->getObject($id);
        $cartDTO = cartDTO::handleData($createCartRequest);
        $updated = $this->cartRepository->updateObject($cart, $cartDTO);


        return redirect()->route('cart.index');
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

        $cart = $this->cartRepository->insertCart($products);
        return view(
            'index',
            $cart
        );

    }

    public function remove($id)
    {
        $this->cartRepository->removeFromCart($id);

        Alert::success('success', 'Product removed to the cart');

        return redirect()->back();
    }
}

