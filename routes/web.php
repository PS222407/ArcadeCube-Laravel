<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Models\Score;
use App\Http\Controllers\ScoreController;

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

Route::view("/", "welcome")->name("welcome");
Route::view("/games", "games")->name("games");
Route::view("/information", "information")->name("information");

Route::get("/account/{id}/username", [CustomerController::class, "edit"]);
Route::put("/account/{id}", [CustomerController::class, "update"]);


Auth::routes(["verify" => true]);

Route::get("/home", [App\Http\Controllers\HomeController::class, "index"])->name("home");
Route::get("/games/snake", [ScoreController::class, "snakeScores"])->name("snake");
Route::get("/games/tetris", [ScoreController::class, "tetrisScores"])->name("tetris");
Route::get("/games/pingpong", [ScoreController::class, "pingpongScores"])->name("pingpong");
Route::get("/account", [ScoreController::class, "accountScores"])->name("account");
