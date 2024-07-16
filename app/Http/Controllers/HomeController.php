<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Repository\Interface\IUserRepository;
use App\Enums\role;

class HomeController extends Controller
{

    protected $userRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(IUserRepository $userRepository)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepository;
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

        return view('admindashboard.home', ['customers' => $customers , 'sellers' => $sellers]);
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

        $products = Product::all();

        return view('admindashboard.products.index', ['products' => $products]);
    }

    public function checkOut()
    {

        return view('checkout');
    }




}

