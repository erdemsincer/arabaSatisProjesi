<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.mainpage');
})->name('mainpage');

Route::get('/profile', function () {
    return view('pages.profilepage');
})->name('profile');

Route::get('/sale', function () {
    return view('pages.salepage');
})->name('sale');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('mainpage');
    })->name('dashboard');
});
