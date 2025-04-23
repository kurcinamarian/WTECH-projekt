<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
            'phone_prefix' => ['required', 'in:A,B'], // Validate only expected values
            'phone_number' => ['required', 'string', 'max:20'],
            'terms' => ['accepted'], // Must be checked
            'newsletter' => ['nullable'], // Optional
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_prefix' => $data['phone_prefix'],
            'phone_number' => $data['phone_number'],
            'newsletter' => isset($data['newsletter']) ? true : false,
        ]);
    }

    // Optional: If you want to show your custom form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
}
