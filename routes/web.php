<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/photos', [MainController::class, 'photos'])->name('photos');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
