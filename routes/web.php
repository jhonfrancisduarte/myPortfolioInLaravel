<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;

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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::view("works", 'works');
Route::view("contact", 'contact');

// How to get controller: Route::get("path", "controller file");
Route::get("users", [Main::class, 'index']);


