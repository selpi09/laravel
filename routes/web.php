<?php

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\QNAController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginmhsController;

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

Route::get('/mahasiswa',[QNAController::class, 'mahasiswaHome'])->middleware('auth');
Route::get('/mahasiswa/cari',[QNAController::class, 'cari'])->middleware('auth');
Route::get('/tatausaha',[DashboardController::class, 'index'])->middleware('auth');
Route::get('/tatausaha/tambah',[DashboardController::class, 'tambah'])->middleware('auth');
Route::post('/tatausaha/store',[DashboardController::class, 'store'])->middleware('auth');
Route::get('/tatausaha/edit/{id}',[DashboardController::class, 'edit'])->middleware('auth');
Route::post('/tatausaha/update',[DashboardController::class, 'update'])->middleware('auth');
Route::get('/tatausaha/hapus/{id}',[DashboardController::class, 'hapus'])->middleware('auth');

Route::get('/lgnmhs', [LoginmhsController::class, 'index'])->name('lgnmhs')->middleware('guest');
Route::post('/lgnmhs', [LoginmhsController::class, 'authenticate']);
Route::post('/logoutmhs', [LoginmhsController::class, 'logoutmhs']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');