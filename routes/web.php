<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelloController;
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
Route::get('home', [HomeController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{name?}', [HelloController::class, 'index'])->name('hello.index');
/*
Route::get('home', function () {
    return view('home.index');
});
*/
