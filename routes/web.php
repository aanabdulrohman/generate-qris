<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\QrController;

Route::get('/qris', [QrController::class, 'generate']);
