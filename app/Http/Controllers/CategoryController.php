<?php

namespace App\Http\Controllers;

use App\DTO\CategoryDTO;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;
use App\Repository\Interface\ICategoryRepository;

class CategoryController extends Controller
{
    protected $categoryRepository;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();

        return view('admin.departments.departmentindex', ['departments' => $departments]);
  
    }

    public function __construct(ICategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.departments.departmentcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $createCategoryRequest)
    {
        $categoryDTO = CategoryDTO::from($createCategoryRequest->all());
        $category = $this->categoryRepository->createCategory($categoryDTO);

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
