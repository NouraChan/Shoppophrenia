<?php

namespace App\Http\Controllers;

use App\DTO\GenreDTO;
use App\Http\Requests\CreategenreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Repository\Interface\IGenreRepository;
use App\Enums\Genres;

class GenreController extends Controller
{
    protected $genreRepository;

    public function __construct(IGenreRepository $genreRepository)
    {
        $this->middleware('auth');

        $this->genreRepository = $genreRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fiction = $this->genreRepository->getCount(Genres::FICTION);
        $drama = $this->genreRepository->getCount(Genres::DRAMA);
        $romance = $this->genreRepository->getCount(Genres::ROMANCE);
        $horror = $this->genreRepository->getCount(Genres::HORROR);
        $historical = $this->genreRepository->getCount(Genres::HISTORICAL);
        $educational = $this->genreRepository->getCount(Genres::EDUCATIONAL);
        $biography = $this->genreRepository->getCount(Genres::BIOGRAPHY);
        $scifi = $this->genreRepository->getCount(Genres::SCIFI);
        $mystery = $this->genreRepository->getCount(Genres::MYSTERY);


        $genres = $this->genreRepository->getAll();

        return view('admindashboard.genres.index', [
            'genres' => $genres,
            'fiction' => $fiction,
            'drama' => $drama,
            'romance' => $romance,
            'horror' => $horror,
            'historical' => $historical,
            'educational' => $educational,
            'scifi' => $scifi,
            'biography' => $biography,
            'mystery' => $mystery,
        ]);

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
        $genre = GenreDTO::handleData($createGenreRequest);
        $this->genreRepository->createObject($genre);


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

        $genre = $this->genreRepository->getObject($id);
        return view('admindashboard.genres.edit', ['genre' => $genre]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateGenreRequest $createGenreRequest, $id)
    {
        $genre = $this->genreRepository->getObject($id);
        $genreDTO = GenreDTO::handleData($createGenreRequest);
        $updated = $this->genreRepository->updateObject($genre, $genreDTO);


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
