<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use Illuminate\Http\Request;
use App\Repository\Interface\IUserRepository;
use App\DTO\UserDTO;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();

        return view('admin.departments.departmentindex', ['departments' => $departments]);
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.passwords.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUser $createuser)
    {
$users = userDTO::handleInputs($createuser);    
$this->userRepository->store($users);

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
        //
    }
}
