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

//EDIT
Route::get('/edit/{movie}', [MainController::class, 'edit'])
  ->name('edit');

// UPDATE
Route::post('/edit/{movie}', [MainController::class, 'update'])
  ->name('update');

// DELETE MOVIE ROUTE
Route::get('/delete/{movie}', [MainController::class, 'delete'])
  ->name('delete');

// API
use App\Http\Controllers\ApiController;

Route::get('/api/v1/movie', [ApiController::class, 'movie']);