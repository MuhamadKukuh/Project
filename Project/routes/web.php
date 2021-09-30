<?php

use Illuminate\Support\Facades\Route;


// Controller Yang Digunakan
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\commentController;

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
// login
Route::get('/', [loginController::class, 'index'])->middleware('guest');
Route::post('/', [loginController::class, 'store']);


// logout
Route::post('/logout', [loginController::class, 'logout'])->middleware('auth');

// Register
Route::get('register', [registerController::class, 'index'])->middleware('guest');
Route::post('register', [registerController::class, 'store']);

// tampilan
Route::get('home', [halamanController::class, 'index'])->middleware('auth');
Route::get('tugas/{tugas:slug}', [halamanController::class, 'show'])->middleware('auth');
Route::get('materi/{materi:slug}', [halamanController::class, 'data'])->middleware('auth');
Route::get('profile', [halamanController::class, 'profile'])->middleware('auth');
Route::get('semuatugas', [halamanController::class, 'datas'])->middleware('auth');
Route::get('semuamateri', [halamanController::class, 'poi'])->middleware('auth');
Route::get('siswa/{user:name}', [halamanController::class, 'siswa'])->middleware('auth');

// komentar
Route::post('comment', [commentController::class, 'comment'])->middleware('auth');




// Belum Di pake
