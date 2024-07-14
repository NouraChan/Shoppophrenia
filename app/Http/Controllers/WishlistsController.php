<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interface\IWishlistsRepository;

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
    public function store(Request $request)
    {
        //

        return redirect()->route('department.index');

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
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect()->back();    }
}
