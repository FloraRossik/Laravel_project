<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\PublicController::class, 'index']);

Route::get('/books', [App\Http\Controllers\BookController::class, 'index']);

Route::get('/books/{id}', [App\Http\Controllers\BookController::class, 'show']);

Route::patch('/books/{id}', [App\Http\Controllers\BookController::class, 'update']);

Route::delete('/books/{id}', [App\Http\Controllers\BookController::class, 'destroy']);



Route::get('/bookauthors', [App\Http\Controllers\BookAuthorController::class, 'index']);

Route::get('/bookauthors/{id}', [App\Http\Controllers\BookAuthorController::class, 'show']);

Route::put('/bookauthors/{id}', [App\Http\Controllers\BookAuthorController::class, 'update']);

Route::delete('/bookauthors/{id}', [App\Http\Controllers\BookAuthorController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/editauthor/{id}', [App\Http\Controllers\BookAuthorController::class, 'edit']);

Route::get('/editbook/{id}', [App\Http\Controllers\BookController::class, 'edit']);


Route::get('/createbook', [App\Http\Controllers\BookController::class, 'create']);
Route::post('/createbook', [App\Http\Controllers\BookController::class, 'store']);

Route::get('/createauthor', [App\Http\Controllers\BookAuthorController::class, 'create']);
Route::post('/createauthor', [App\Http\Controllers\BookAuthorController::class, 'store']);


