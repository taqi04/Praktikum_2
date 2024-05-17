<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

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


// Praktikum laravel 2

Route::get('/dashboard',[AdminController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);


