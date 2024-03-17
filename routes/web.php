<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/front/login', function () {
    return redirect(route('filament.front.auth.login'));
})->name('login');
