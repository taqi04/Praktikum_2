<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsisController;
use App\Http\Controllers\Jenis_faskessController;
use App\Http\Controllers\KabkotasController;
use App\Http\Controllers\KategorisController;
use App\Http\Controllers\FaskessController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
});



Route::get('/dashboard', function () {
    return view('dashboard');
    Route::get('/',[AdminController::class,'index']);
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/jenis_faskess/index', [Jenis_faskessController::class, 'index']);
    Route::get('/jenis_faskess/create', [Jenis_faskessController::class,'create']);
    Route::post('/jenis_faskess/store', [Jenis_faskessController::class,'store']);
    Route::get('/jenis_faskess/show/{id}', [Jenis_faskessController::class,'show']);
    Route::get('/jenis_faskess/edit/{id}', [Jenis_faskessController::class,'edit']);
    Route::put('/jenis_faskess/update/{id}', [Jenis_faskessController::class,'update']);
    Route::delete('/jenis_faskess/destroy/{id}', [Jenis_faskessController::class,'destroy']);

    //kab kotas
    Route::get('/kabkotas/index', [KabkotasController::class, 'index']);
    Route::get('/kabkotas/create', [KabkotasController::class,'create']);
    Route::post('/kabkotas/store', [KabkotasController::class,'store']);
    Route::get('/kabkotas/show/{id}', [KabkotasController::class,'show']);
    Route::get('/kabkotas/edit/{id}', [KabkotasController::class,'edit']);
    Route::put('/kabkotas/update/{id}', [KabkotasController::class,'update']);
    Route::delete('/kabkotas/destroy/{id}', [KabkotasController::class,'destroy']);

    //kategori
    Route::get('/kategoris/index', [KategorisController::class, 'index']);
    Route::get('/kategoris/create', [KategorisController::class,'create']);
    Route::post('/kategoris/store', [KategorisController::class,'store']);
    Route::get('/kategoris/show/{id}', [KategorisController::class,'show']);
    Route::get('/kategoris/edit/{id}', [KategorisController::class,'edit']);
    Route::put('/kategoris/update/{id}', [KategorisController::class,'update']);
    Route::delete('/kategoris/destroy/{id}', [KategorisController::class,'destroy']);
    //fasekss

    Route::get('/faskess/index', [FaskessController::class, 'index'])->name('faskess.index');

    Route::get('/faskess/create', [FaskessController::class,'create']);
    Route::post('/faskess/store', [FaskessController::class,'store']);
    Route::get('/faskess/show/{id}', [FaskessController::class,'show']);
    Route::get('/faskess/edit/{id}', [FaskessController::class,'edit']);
    Route::put('/faskess/update/{id}', [FaskessController::class,'update']);
    Route::delete('/faskess/destroy/{id}', [FaskessController::class,'destroy']);
    //provinsis
    Route::get('/provinsis/index', [ProvinsisController::class,'index']);
    Route::get('/provinsis/create', [ProvinsisController::class,'create']);
    Route::post('/provinsis/store', [ProvinsisController::class,'store']);
    Route::get('/provinsis/show/{id}', [ProvinsisController::class,'show']);
    Route::get('/provinsis/edit/{id}', [ProvinsisController::class,'edit']);
    Route::put('/provinsis/update/{id}', [ProvinsisController::class,'update']);
    Route::delete('/provinsis/destroy/{id}', [ProvinsisController::class,'destroy']);



});

require __DIR__.'/auth.php';
