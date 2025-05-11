<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function updateaccount(Request $request)
    {

        $user = auth()->user();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required','email',Rule::unique('users', 'email')->ignore($user->user_id, 'user_id'),
            'telephone' => 'nullable|int',
            'dob' => 'nullable|date',
            'street' => 'nullable|string|max:255',
            'house_number' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:10',
            'country' => 'nullable|string|max:255',
        ]);

        $nameParts = explode(' ', $request->name, 2);
        $user->firstname = $nameParts[0];
        $user->lastname = $nameParts[1] ?? '';

        $user->email = $request->email;
        $user->telephone_number = $request->telephone;
        $user->birth_date = $request->dob;

        $address = implode(';', [
            $request->street,
            $request->house_number,
            $request->city,
            $request->zip,
            $request->country,
        ]);
        $user->address = $address;

        $user->save();

        return back()->with('success', 'Profile updated successfully!');
    }

    public function update(Request $request)
    {

        $user = auth()->user();

        $user_settings = 0;

        $user_settings |= $request->has('email_notifications') ? 1 : 0;
        $user_settings |= $request->has('new_offers') ? 2 : 0;
        $user_settings |= $request->has('newsletters') ? 4 : 0;
        $user_settings |= $request->has('show_profile_public') ? 8 : 0;
        $user_settings |= $request->has('track_location') ? 16 : 0;
        $user_settings |= $request->has('third_party_data_sharing') ? 32 : 0;

        $user->user_settings = $user_settings;

        $user->save();

        return back()->with('success', 'Profile updated successfully!');
    }


}



