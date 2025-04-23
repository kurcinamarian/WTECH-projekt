<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function submitRegistration(Request $request)
    {
        // Optional: validation and saving logic here
        // $request->validate([...]);

        // Redirect to 'main' after successful "registration"
        return redirect('/');
    }
}
