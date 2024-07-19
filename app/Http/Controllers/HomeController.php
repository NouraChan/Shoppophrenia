<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Repository\Interface\IUserRepository;
use App\Enums\role;
use Jackiedo\Cart\Facades\Cart;
use App\Repository\Interface\ICartRepository;
use App\Repository\Interface\IProductRepository;

class HomeController extends Controller
{
    protected $userRepository;
    protected $productRepository;
    protected $cartRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(IUserRepository $userRepository, ICartRepository $cartRepository, IProductRepository $productRepository)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepository;
        $this->cartRepository = $cartRepository;
        $this->productRepository = $productRepository;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = $this->userRepository->roleCall(role::CUSTOMER);

        return view('index', ['customers' => $customers]);
    }

    public function index2()
    {
        $customers = $this->userRepository->getCount(role::CUSTOMER);
        $sellers = $this->userRepository->getCount(role::SELLER);
        $user = $this->userRepository->getAll();

        return view('admindashboard.home', ['customers' => $customers, 'sellers' => $sellers, 'user' => $user]);
    }

    public function usersAffair()
    {
        return view('admindashboard.users');
    }

    public function usersIndex()
    {

        $users = User::all();

        return view('admindashboard.users.index', ['users' => $users]);
    }


    public function genreIndex()
    {

        $genres = Genre::all();

        return view('admindashboard.genres.index', ['genres' => $genres]);
    }

    public function productIndex()
    {

        $products = $this->productRepository->getAll();
        return view('admindashboard.products.index', ['products' => $products]);
    }

    public function checkOut(string $id)
    {
        $product = $this->productRepository->getObject($id);
        $products = $this->productRepository->getAll();
        $cart = $this->cartRepository->insertCart($products);
        $items= $this->cartRepository->addToCart($product);

        // dd(gettype($cart));


        return view('checkout',$cart , [
            'items' => $items,
            'product' => $product,
            'products' => $products,
             
        ]);
    }




}

