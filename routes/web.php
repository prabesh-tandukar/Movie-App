<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\MovieController;

Route::resource('movies', MovieController::class);
Route::resource('actors', ActorController::class);

Route::get('/', [MovieController::class, 'indexClient' ])->name("home");
Route::get('/moviedetail/{id}', [MovieController::class, 'showClient'])->name("movies.showClient");
Route::get('/allactors', [ActorController::class, 'indexActor' ])->name("all_actors");
Route::get('/viewactor/{id}', [ActorController::class, 'viewActor'])->name("actor_detail");
Route::get('/allmovies', [MovieController::class, 'allMovies'])->name("all_movies");