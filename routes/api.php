<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/movies', [MovieController::class, 'getAllMovies']);
Route::get('/movies/{id}', [MovieController::class, 'getMovieById']);
Route::get('/directors/{id}', [MovieController::class, 'getDirectorById']);
Route::get('/actors/{id}', [MovieController::class, 'getActorById']);
Route::get('/movies-with-genres', [MovieController::class, 'getMoviesWithGenres']);
Route::get('/movies-with-ratings', [MovieController::class, 'getMoviesWithRatings']);

