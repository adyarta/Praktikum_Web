<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// app/Http/Controllers/AuthController.php

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processForm()
    {
        // Handle form submission logic here
        // ...
        

        return redirect()->route('home')->with('message', 'You have successfully joined as a member!');
    }
}

