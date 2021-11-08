<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::resource('/users', UserController::class);

Route::get('/', function () {
    return redirect('/users');
});

Route::get('/about', function () {
    return view('about');
});