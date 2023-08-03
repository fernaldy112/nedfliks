<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowController;

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

Route::get('/', [HomeController::class, "homepage"]);
Route::get('/tv_shows', [HomeController::class, "tv_shows"]);
Route::get('/movies', [HomeController::class, "movies"]);

Route::get('/show/{show}', [ShowController::class, "show_detail"]);