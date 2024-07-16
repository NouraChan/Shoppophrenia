<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Repository\Interface\IUserRepository;
use App\Enums\role;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    protected $userRepository;

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */



    // public function __construct(IUserRepository $userRepository){
    //     $this->userRepository = $userRepository;
    // }
    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;

        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'first_name'  => ['nullable', 'string'],
            // 'last_name'  => ['nullable', 'string'],
            // 'gender'  => ['nullable', 'string'],
            // 'serial_key'  => ['nullable', 'string'],
            // 'fullname'  => ['nullable', 'string'],
            // 'phone_number'  => ['nullable', 'string'],
            // 'role'  => ['nullable', 'string'],
            // 'user_img'  => ['nullable', 'string'],
            // 'address' => ['nullable', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $customers = $this->userRepository->roleCall(role::CUSTOMER);
        $sellers = $this->userRepository->roleCall(role::SELLER);
        $admin = $this->userRepository->roleCall(role::ADMIN);


        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'], ),
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'gender'  =>$data ['gender'],
            'serial_key'  =>$data ['serial_key'],
            'fullname'  => $data['fullname'],
            'phone_number'  =>$data ['phone_number'],
            'role'  => $data['role'],
            'user_img'  =>$data ['user_img'],
            'address' => $data['address'],

        ]);
    }

    protected function update(array $data)
    {
        return User::update([

            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'], ),
            // 'first_name' => $data['first_name'],
            // 'last_name'  => $data['last_name'],
            // 'gender'  =>$data ['gender'],
            // 'serial_key'  =>$data ['serial_key'],
            // 'fullname'  => $data['fullname'],
            // 'phone_number'  =>$data ['phone_number'],
            // 'role'  => $data['role'],
            // 'user_img'  =>$data ['user_img'],
            // 'address' => $data['address'],
        ]);

    }
}
