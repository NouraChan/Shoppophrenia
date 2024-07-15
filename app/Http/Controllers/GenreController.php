<?php

namespace App\Http\Controllers;

use App\DTO\GenreDTO;
use App\Http\Requests\CreategenreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Repository\Interface\IGenreRepository;

class GenreController extends Controller
{    protected $genreRepository;

    public function __construct(IGenreRepository $genreRepository)
    {
        $this->genreRepository = $genreRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $genres = $this->genreRepository->getAll();

        return view('admindashboard.genres.index', ['genres' => $genres]);
  
    }

   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admindashboard.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateGenreRequest $createGenreRequest)
    {
        $genres = GenreDTO::from($createGenreRequest->all());
        $genre = $this->genreRepository->createObject($genres);

        return redirect()->route('genre.index');


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
        
        $genre =$this->genreRepository->getObject($id);
        return view('admindashboard.genres.edit', ['genre' => $genre]);
 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $genre = $this->genreRepository->getObject($id);
        $genre->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genre = $this->genreRepository->getObject($id);
        $genre->delete();
        return redirect()->back();
    }
}
