<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// rotta home
Route::get('/', [PublicController::class,'home'])->name('home');

// rotta serie
Route::get('/series', [SerieController::class,'index'])->name('index.series');
Route::get('/series/detail/{id}',[SerieController::class,'show'])->name('show.series');

// rotta film
Route::get('/movies', [MovieController::class,'index'])->name('index.movies');
Route::get('/movies/detail/{id}',[MovieController::class,'show'])->name('show.movies');

// rotta per la visualizzazione del form per la crazione dei fim
Route::get('/movies/create', [MovieController::class,'create'])->name('create.movie');
Route::post('/movies/store', [MovieController::class,'store'])->name('store.movie');
