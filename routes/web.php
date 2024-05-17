<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.mainpage');
})->name('mainpage');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('mainpage');
    })->name('dashboard');
});
