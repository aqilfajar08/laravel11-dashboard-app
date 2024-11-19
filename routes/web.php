<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::get('home', function () {
    return view('pages.dashboard');
})->name('home');

// semua route ini dipindahkan ke folder `app/providers/FortifyServiceProvider.php`
// Route::get('login', function () {
//     return view('pages.auth.login');
// });

// Route::get('register', function () {
//     return view('pages.auth.register');
// });
