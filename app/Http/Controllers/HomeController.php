<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function index2()
    {
        return view('admindashboard.home');
    }

    public function usersAffair(){
        return view('admindashboard.users');
    }

    public function usersIndex(){

        $users = User::all();

        return view('admindashboard.usersindex' , ['users' => $users]);
    }


    public function genreIndex(){

        $genres = Category::all();

        return view('admindashboard.genres' , ['genres' => $genres]);
    } 
    
    public function productIndex(){

        $products = Product::all();

        return view('admindashboard.products' , ['products' => $products]);
    } 
    
    // public function usersIndex(){

    //     $users = User::all();

    //     return view('admindashboard.usersindex' , ['users' => $users]);
    // }

    


}

