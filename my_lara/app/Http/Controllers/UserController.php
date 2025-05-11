<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function updateaccount(Request $request)
    {

        $user = auth()->user();



        // Validate the incoming data first
        /*$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user',
            'telephone' => 'nullable|string|max:20',
            'dob' => 'nullable|date',
            'street' => 'nullable|string|max:255',
            'house_number' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:10',
            'country' => 'nullable|string|max:255',

            'email_notifications' => 'boolean',
            'new_offers' => 'boolean',
            'newsletters' => 'boolean',
            'show_profile_public' => 'boolean',
            'track_location' => 'boolean',
            'third_party_data_sharing' => 'boolean',
        ]);*/



        // Separate name into first and last name
        $nameParts = explode(' ', $request->name, 2);
        $user->firstname = $nameParts[0];
        $user->lastname = $nameParts[1] ?? '';

        // Update other user info
        $user->email = $request->email;
        $user->telephone_number = $request->telephone;
        $user->birth_date = $request->dob;

        // Merge the address into a single string
        $address = implode(';', [
            $request->street,
            $request->house_number,
            $request->city,
            $request->zip,
            $request->country,
        ]);
        $user->address = $address;

        // Save the changes
        $user->save();

        return back()->with('success', 'Profile updated successfully!');
    }

    public function update(Request $request)
    {

        $user = auth()->user();



        // Validate the incoming data first
        /*$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user',
            'telephone' => 'nullable|string|max:20',
            'dob' => 'nullable|date',
            'street' => 'nullable|string|max:255',
            'house_number' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:10',
            'country' => 'nullable|string|max:255',
            'profile_image' => 'sometimes|image|max:2048',
            'email_notifications' => 'boolean',
            'new_offers' => 'boolean',
            'newsletters' => 'boolean',
            'show_profile_public' => 'boolean',
            'track_location' => 'boolean',
            'third_party_data_sharing' => 'boolean',
        ]);*/



        // Separate name into first and last name
        $user_settings = 0;

        // Check each setting and set the corresponding bit
        $user_settings |= $request->has('email_notifications') ? 1 : 0;
        $user_settings |= $request->has('new_offers') ? 2 : 0;
        $user_settings |= $request->has('newsletters') ? 4 : 0;
        $user_settings |= $request->has('show_profile_public') ? 8 : 0;
        $user_settings |= $request->has('track_location') ? 16 : 0;
        $user_settings |= $request->has('third_party_data_sharing') ? 32 : 0;


        // Update the user's settings
        $user->user_settings = $user_settings;

        // Save the changes
        $user->save();

        return back()->with('success', 'Profile updated successfully!');
    }


}



