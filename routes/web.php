<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return  view('home');
});

Route::get('user/{userId?}', function ($userId = "Default") {
    return view('user', ['userId' => $userId]);
});

Route::get('book', [BookController::class, 'index']);

Route::get('vbook/{judul}', [BookController::class, 'viewJudul']);