<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return "selamat datang";
});

Route::get('/salam', function () {
    return "selamat datang taqi di laravel 11";
});

Route::get('/profile', function () {
    return "halaman profile";
});
