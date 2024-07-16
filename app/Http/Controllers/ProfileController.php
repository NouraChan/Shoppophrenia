<?php

namespace App\Http\Controllers;

use App\DTO\UserDTO;
use App\Http\Requests\CreateProfileRequest;
use Illuminate\Http\Request;
use App\Repository\Interface\IProfileRepository;
class ProfileController extends Controller
{

    protected $profileRepository;

    public function __construct(IProfileRepository $profileRepository){
        $this->profileRepository = $profileRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //


    }

    /**
     * Display the specified resource.
     */
    public function show(CreateProfileRequest $createProfileRequest)
    {
        // $profile = $this->profileRepository->getObject($id);
        return view('profile.show',compact('profile'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CreateProfileRequest $createProfileRequest)
    {
        return view('profile.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateProfileRequest $createProfileRequest, string $id)
    {
        $profile = $this->profileRepository->getObject($id);
        $profileDTO = UserDTO::handleData($createProfileRequest);
        $updated = $this->profileRepository->updateObject($profile, $profileDTO);


        return redirect()->route('profile.index');
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
