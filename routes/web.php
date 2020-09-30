<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvshowsController;
use App\Http\Controllers\ActorsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movie/{movieId}', [MoviesController::class, 'show'])->name('movies.show');


Route::get('/tvshows', [TvshowsController::class, 'index'])->name('tvshows.index');
Route::get('/tvshow/{tvShowId}', [TvshowsController::class, 'show'])->name('tvshows.show');



Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actor/{actorId}', [ActorsController::class, 'show'])->name('actors.show');

