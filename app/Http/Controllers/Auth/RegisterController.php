<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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
        return Validator::make ($data, [
            'name' => 'required|string|max:255|regex:/^[a-zA-Z]+$/u',
            'middlename' => 'required|string|max:255|regex:/^[a-zA-Z]+$/u',
            'lastname' => 'required|string|max:255|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|min:8|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'role',
            'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => ucfirst(strtolower(trans(($data['name'])))),
            'middlename' => ucfirst(strtolower(trans(($data['middlename'])))),
            'lastname' => ucfirst(strtolower(trans(($data['lastname'])))),
            'email' => $data['email'],
            'phone' => $data['phone'],
            'role' => $data['role'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
