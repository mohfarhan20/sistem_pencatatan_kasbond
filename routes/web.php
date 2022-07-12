<?php

use App\Http\Controllers\KasbondKontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/kasbond', 'KasbondController@index');
Route::get('/', [KasbondKontroller::class, 'index'])->name('user.index');
Route::get('/data_kasbond/tambah', [KasbondKontroller::class, 'tambah'])->name('user.tambah');
Route::post('/data_kasbond/tambah', [KasbondKontroller::class, 'store'])->name('user.store');
Route::get('/data_kasbond/edit/{id}', [KasbondKontroller::class, 'edit'])->name('user.edit');
Route::post('/data_kasbond/update', [KasbondKontroller::class, 'update'])->name('user.update');
Route::get('/data_kasbond/delete/{id}', [KasbondKontroller::class, 'delete'])->name('user.delete');

// Route for login
Route::get('/login', [LoginController::class, 'index']);

// Route for register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
