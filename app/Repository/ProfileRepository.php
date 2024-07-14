<?php

namespace App\Repository;
use App\Models\Profile;
use App\Repository\Interface\ IProfileRepository;

class ProfileRepository implements IProfileRepository {


    public function createObject($createProfileRequest)  
{

   return Profile::create($createProfileRequest);

}

public function updateObject($createProfileRequest , $id) {

    return Profile::update($createProfileRequest);


    // if (Profile::update($userDTO->toArray())) {

    //     return true;
    // }
    // return false;

}


public function getAll(){

    return Profile::all();

}

public function getObject($id) : object {

    return Profile::findOrFail($id);


}
}

