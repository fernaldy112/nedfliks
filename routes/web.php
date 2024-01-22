<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthenticationController;

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

Route::get('/', [HomeController::class, "homepage"])->middleware("auth");
Route::get('/tv_shows', [HomeController::class, "tv_shows"])->middleware("auth");
Route::get('/movies', [HomeController::class, "movies"])->middleware("auth");

Route::get('/show/{show}', [ShowController::class, "show_detail"])->middleware("auth");
Route::get('/my_list', [ShowController::class, "my_list"])->middleware("auth");
Route::post('/my_list/{show}', [ShowController::class, "update_my_list"])->middleware("auth");

Route::get('/login', [AuthenticationController::class, "login_page"])->name("login");
Route::get('/register', [AuthenticationController::class, "register_page"]);
Route::get('/change_password', [AuthenticationController::class, "change_password_page"])->middleware("auth");
Route::get('/profile', [ProfileController::class, "profile_page"])->middleware("auth");

Route::post('/login', [AuthenticationController::class, "login"]);
Route::post('/register', [AuthenticationController::class, "register"]);
Route::post('/change_password', [AuthenticationController::class, "change_password"])->middleware("auth");
Route::post('/logout', [AuthenticationController::class, "logout"])->middleware("auth");

