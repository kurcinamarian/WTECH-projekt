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

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {

        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'password' => ['required', 'string', 'min:8'],
            'phone_prefix' => ['required', 'in:A,B'],
            'phone_number' => ['required', 'string', 'max:20'],
            'terms' => ['accepted'],
            'newsletter' => ['nullable'],
        ]);
    }

    protected function create(array $data)
    {
        $prefix = $data['phone_prefix'] == 'A' ? '421' : '420';
        $telephoneNumber = $prefix . $data['phone_number'];
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'telephone_number' => $telephoneNumber,
            'user_settings' => isset($data['newsletter']) ? 4 : 0,
        ]);
    }

    // Optional: If you want to show your custom form
    public function showRegistrationForm()
    {
        return view('register');
    }
}
