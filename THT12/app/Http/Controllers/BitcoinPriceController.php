<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class BitcoinPriceController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.coindesk.com/v1/bpi/currentprice.json');
        return view('bitcoin-price', ['bpi' => $response->json()['bpi']]);
    }
}
