<?php

use Illuminate\Support\Facades\Route;
//controllers
use App\Http\Controllers\admin\ComicController;
use App\Http\Controllers\main\mainController;

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
Route::get('/', [mainController::class, 'index'])->name('home');
Route::get('/show/{comic}', [mainController::class, 'show'])->name('main-show');

Route::resource('comics', ComicController::class);