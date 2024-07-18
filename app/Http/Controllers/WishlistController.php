<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interface\IWishlistRepository;
use App\DTO\WishlistDTO;
use App\Http\Requests\CreateWishlistRequest;
use Auth;

class WishlistController extends Controller
{ 
    protected $wishlistRepository;

    public function __construct(IWishlistRepository $wishlistRepository){
        $this->wishlistRepository = $wishlistRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishlist = $this->wishlistRepository->getAll();

        return view('admindashboard.wishlist.index', ['wishlist' => $wishlist]);
  
    }

    /**
     * Show the form for creating a new resource.
     */
   
    public function create()
    {
        return view('admindashboard.wishlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateWishlistRequest $createWishlistRequest)
    {
       
        $wishlist = WishlistDTO::handleData($createWishlistRequest);
        $this->wishlistRepository->createObject($wishlist);
        

        return redirect()->route('wishlist.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $wishlist = $this->wishlistRepository->getObject(Auth::id());

        return view('wishlist', ['wishlist' => $wishlist]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $wishlist = $this->wishlistRepository->getObject($id);
        return view('admindashboard.wishlist.edit', ['wishlist' => $wishlist]);    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateWishlistRequest $createWishlistRequest, string $id)
    {
        $wishlist = $this->wishlistRepository->getObject($id);
        $wishlistDTO = wishlistDTO::handleData($createWishlistRequest);
        $updated = $this->wishlistRepository->updateObject($wishlist, $wishlistDTO);


        return redirect()->route('wishlist.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wishlist = $this->wishlistRepository->getObject($id);
        $wishlist->delete();
        return redirect()->back();    }
}
