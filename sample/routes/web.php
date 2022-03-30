<?php

use Illuminate\Support\Facades\Route;

// ***** 追加 *****
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ArticleController;

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
    return view('welcome');
});

// ***** 開始 *****
Route::get('/show', [ArticleController::class, 'show']); // 課題2

Route::resource('/user', UserController::class); // 課題3

//Route::resource('/book', BookController::class);
//Route::get('/hiyoko', function() { return 'のたまご'; });
// ***** 終了 *****