<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

// API
use App\Http\Controllers\ApiController;

Route::get('/v1/movie', [ApiController::class, 'movie']);