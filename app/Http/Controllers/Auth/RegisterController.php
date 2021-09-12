<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;

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
            "name" => ["required", "string", "max:255"],
            "lname" => ["required", "string", "max:255"],
            "email" => ["required", "string", "max:255", "unique:users", "regex:/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/u"],
            "password" => ["required", "string", "min:8", "confirmed", "regex:/(?=.*[a-zA-Z])(?=.*[0-9])(?=.*.{8,})(?=.*[ !#$%&'()*+,-.\/:;<=>?@\[\]^_`{|}~])/u"],
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
        //voornaam fixen voor in database
        $voornaam = $data['name'];
        $voornaam = trim(preg_replace('/\s+/', ' ', $voornaam));
        $voornaam = strtolower($voornaam);
        $parts = preg_split('/\s+/', $voornaam);
        foreach ($parts as &$value) {
            $value = ucfirst($value);
        }
        $voornaam = implode(" ", $parts);

        //achternaam fixen voor in database
        $achternaam = $data['lname'];
        $achternaam = trim(preg_replace('/\s+/', ' ', $achternaam));
        $achternaam = strtolower($achternaam);
        $parts = preg_split('/\s+/', $achternaam);
        $lastpart = ucfirst($parts[count($parts) - 1]);
        $parts = array_replace($parts, array(count($parts) - 1 => $lastpart));
        $achternaam = implode(" ", $parts);

        return User::create([
            'name' => $voornaam,
            'lname' => $achternaam,
            'email' => strtolower($data['email']),
            'password' => Hash::make($data['password'], ['rounds' => 12]),
        ]);
    }
}
