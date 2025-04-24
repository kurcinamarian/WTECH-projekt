<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ShoppingCart;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    use AuthenticatesUsers;


    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        $sessionId = session()->getId();
        // Validate email and password
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return back()->with("error","Login incorrect")->withErrors($validator)->withInput();
        }

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $userId = auth()->check() ? auth()->id() : null;

            ShoppingCart::where('session_id', $sessionId)->update(['user_id' => $userId]);
            return redirect()->intended($this->redirectTo);
        }


        // If login fails, return with an error message
        return back()->withErrors(['email' => 'The provided credentials are incorrect.'])->withInput();
    }
}
