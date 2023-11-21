<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:20'],
            'middlename' => ['nullable', 'string', 'max:20'],
            'lastname' => ['nullable', 'string', 'max:20'],
            'nisn' => ['required', 'string', 'max:14', 'unique:users'],
            'telephone' => ['required', 'string', 'max:14', 'min:12', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'firstname.required' => 'Nama depan wajib diisi!',
            'firstname.max' => 'Nama depan tidak boleh lebih dari 20 karakter!',
            'firstname.string' => 'Nama depan harus berupa karakter!',

            'middlename.max' => 'Nama depan tidak boleh lebih dari 20 karakter!',
            'middlename.string' => 'Nama depan harus berupa karakter!',

            'lastname.max' => 'Nama depan tidak boleh lebih dari 20 karakter!',
            'lastname.string' => 'Nama depan harus berupa karakter!',

            'nisn.required' => 'NISN wajib diisi!',
            'nisn.unique' => 'NISN sudah terdaftar!',

            'telephone.required' => 'Telephone wajib diisi!',
            'telephone.min' => 'Telephone minimal 12 angka!',
            'telephone.max' => 'Telephone maximal 14 angka!',
            'telephone.unique' => 'Telephone sudah terdaftar!',

            'email.required' => 'Email wajib diisi!',
            'email.string' => 'Email harus berupa karakter!',
            'email.unique' => 'Email sudah terdaftar!',

            'password.required' => 'Password wajib diisi!',
            'password.confirmed' => 'Konfirmasi password tidak sesuai!',
            'password.min' => 'Password minimal 8 karakter'
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
        $data['firstname'] = ucfirst($data['firstname']);
        $data['middlename'] = ucfirst($data['middlename']);
        $data['lastname'] = ucfirst($data['lastname']);

        return User::create([
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'nisn' => $data['nisn'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
