<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\Repository\Interface\IUserRepository;
use App\DTO\UserDTO;
use App\Models\User;

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
        $users = $this->userRepository->getAll();

        return view('admin.users.index', ['users' => $users]);

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
    public function store(CreateUserRequest $createUserRequest)
    {
        
        $userDTO = UserDTO::handleData($createUserRequest);
       $user = $this->userRepository->createObject($userDTO);
        return redirect()->route('admindashboard.users.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(User $user, $id)
    {
        $user = $this->userRepository->getObject($id);

        return view('profile.show',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $users = $this->userRepository->getAll();

        return view('profile.edit',['users' => $users]);
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
