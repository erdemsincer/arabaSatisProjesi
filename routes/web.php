<?php

use Illuminate\Support\Facades\Route;

/* Pages Routes Start */
Route::get('/', function () {
    return view('pages.mainpage');
})->name('mainpage');

Route::get('/profile', function () {
    return view('pages.profilepage');
})->name('profile');

Route::get('/sale', function () {
    return view('pages.salepage');
})->name('sale');

Route::get('/advertisement', function () {
    return view('pages.advertisements');
})->name('advertisement');

Route::get('/detail', function () {
    return view('pages.addetailpage');
})->name('detail');
/* Pages Routes End */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('mainpage');
    })->name('dashboard');
});
