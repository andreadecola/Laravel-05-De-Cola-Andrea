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

// rotta film
Route::get('/movies', [MovieController::class,'index'])->name('index.movies');