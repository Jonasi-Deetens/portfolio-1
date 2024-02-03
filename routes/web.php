<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [HomeController::class, 'index'])->name("home");

Route::get("/login", [SessionController::class, 'index'])->name("login");
Route::post("/login", [SessionController::class, 'login'])->name("userLogin");
Route::post("/register", [SessionController::class, 'register'])->name("userRegister");
Route::get("/logout", [SessionController::class, 'logout'])->name("logout");