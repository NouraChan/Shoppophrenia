<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interface\IWishlistsRepository;
use App\DTO\WishlistsDTO;
use App\Http\Requests\CreateWishlistRequest;

class WishlistsController extends Controller
{ 
    protected $wishlistsRepository;

    public function __construct(IWishlistsRepository $wishlistsRepository){
        $this->wishlistsRepository = $wishlistsRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishlists = $this->wishlistsRepository->getAll();

        return view('admindashboard.wishlists.index', ['wishlists' => $wishlists]);
  
    }

    /**
     * Show the form for creating a new resource.
     */
   
    public function create()
    {
        return view('admindashboard.wishlists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateWishlistRequest $createWishlistRequest)
    {
       
        $wishlists = WishlistsDTO::handleData($createWishlistRequest);
        $this->wishlistsRepository->createObject($wishlists);
        

        return redirect()->route('wishlists.index');

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

        $wishlist = $this->wishlistsRepository->getObject($id);
        return view('admindashboard.wishlists.edit', ['wishlist' => $wishlist]);    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateWishlistRequest $createWishlistRequest, string $id)
    {
        $wishlist = $this->wishlistsRepository->getObject($id);
        $wishlistDTO = wishlistsDTO::handleData($createWishlistRequest);
        $updated = $this->wishlistsRepository->updateObject($wishlist, $wishlistDTO);


        return redirect()->route('wishlist.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wishlist = $this->wishlistsRepository->getObject($id);
        $wishlist->delete();
        return redirect()->back();    }
}
