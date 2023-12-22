<?php

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $galleryImages = [
            'uploads/hyundai.jpg',
            'uploads/kia.png',
            'uploads/wuling.jpg',
            'uploads/tesla.jpg',
        ];

        return view('home', compact('galleryImages'));
    }
}



