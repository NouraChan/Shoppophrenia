<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use App\Repository\Interface\IItemsRepository;

class ItemsController extends Controller
{
    protected $itemsRepository;

    public function __construct(IItemsRepository $itemsRepository){
        $this->itemsRepository = $itemsRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = $this->itemsRepository->getAll();

        return view('admindashboard.items.index', ['items' => $items]);
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admindashboard.items.create');
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
