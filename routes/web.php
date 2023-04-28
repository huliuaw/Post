<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route Board
Route::get('/board', 'App\Http\Controllers\BoardController@index');
Route::get('/board/create', [BoardController::class, 'create']);
Route::get('/board/search', 'App\Http\Controllers\BoardController@search');
Route::post('/board/store', [BoardController::class, 'store']);
Route::get('/board/edit/{id}', [BoardController::class, 'edit']);
Route::post('/board/update', [BoardController::class, 'update']);
Route::get('/board/delete/{id}', [BoardController::class, 'destroy']);