<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// HOME PAGE ROUTE
Route::get('/', [MainController::class, 'home'])
  ->name('home');

// MOVIE PAGE ROUTE
Route::get('/movie', [MainController::class, 'movie'])
  ->name('movie');

// CREATE ROUTE 
Route::get('/create', [MainController::class, 'create'])
  ->name('create');

//STORE ROUTE 
Route::post('/create', [MainController::class, 'store'])
  ->name('store');

// DELETE MOVIE ROUTE
Route::get('/delete/{movie}', [MainController::class, 'delete'])
  ->name('delete');