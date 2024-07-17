<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\Repository\Interface\IUserRepository;
use App\DTO\UserDTO;
use Auth;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->middleware('auth');
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
    public function show(string $id)
    {
        $user = $this->userRepository->getObject(Auth::id());

        return view('layouts.profile',['user' => $user]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
       
        $user = $this->userRepository->getObject(Auth::id());
        return view('profile.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateUserRequest $createUserRequest, string $id)
    {
        $user = $this->userRepository->getObject(Auth::id());
        $userDTO = UserDTO::handleData($createUserRequest);
        $updated = $this->userRepository->updateObject($user, $userDTO);

        return redirect()->route('user.profile',Auth::id());
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = $this->userRepository->getObject($id);
        $user->delete();
        return redirect()->back();
    }

    public function toProfile(){
        $user = $this->userRepository->getObject(Auth::id());
        return view('profile.show',['user' => $user]);
    }
}

