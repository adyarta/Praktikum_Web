<?php

// app/Http/Controllers/LoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        // Validate the form data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'profilePicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust the file types and size as needed
        ]);

        // Process login logic here

        // If successful, redirect to the home page
        return redirect('/')->with('success', 'You have successfully joined as a member.');
    }
}

