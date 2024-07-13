<?php

namespace App\Http\Controllers;

use App\DTO\GenreDTO;
use App\Http\Requests\CreategenreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Repository\Interface\IGenreRepository;

class GenreController extends Controller
{
    protected $genreRepository;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();

        return view('admindashboard.genres.index', ['genres' => $genres]);
  
    }

    public function __construct(IGenreRepository $genreRepository)
    {
        $this->genreRepository = $genreRepository;
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
    public function store(CreateGenreRequest $creategenreRequest)
    {
        $genreDTO = GenreDTO::from($creategenreRequest->all());
        $genre = $this->genreRepository->creategenre($genreDTO);

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
        
        // $department = Department::findOrFail($id);
        // return view('admin.departments.departmentupdate', ['department' => $department]);
 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $department = Department::findOrFail($id);
        // $department->update([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);

        // return redirect()->route('department.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect()->back();
    }
}
