<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\MovieController;

Route::resource('movies', MovieController::class);
Route::resource('actors', ActorController::class);

Route::view('/', 'index');
Route::view('/movie', 'show');
