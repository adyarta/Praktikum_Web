<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BitcoinPriceController;

Route::get('/bitcoin-price', [BitcoinPriceController::class, 'index']);





