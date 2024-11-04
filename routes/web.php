<?php

use Illuminate\Support\Facades\Route;

// Routes for the main user page
Route::get('/', function () {
    return view('index');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/kamartidur', function () {
    return view('kamartidur');
});

// Routes for the admin subdomain
Route::domain('admin.localhost')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    // Add other admin routes here
});
