<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateItemRequest;
use App\Models\Items;
use Illuminate\Http\Request;
use App\Repository\Interface\IItemsRepository;
use App\DTO\ItemsDTO;

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
    public function store(CreateItemRequest $createItemRequest)
    {
       
        $items = ItemsDTO::handleData($createItemRequest);
        $this->itemsRepository->createObject($items);
        

        return redirect()->route('items.index');

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

        // $genre = $this->genreRepository->getObject($id);
        // return view('admindashboard.genres.edit', ['genre' => $genre]);    }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(CreateItemRequest $createItemRequest, string $id)
    {
        $item = $this->itemsRepository->getObject($id);
        $itemDTO = ItemsDTO::handleData($createItemRequest);
        $updated = $this->itemsRepository->updateObject($item, $itemDTO);


        return redirect()->route('Item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = $this->itemsRepository->getObject($id);
        $item->delete();
        return redirect()->back();    }
}
