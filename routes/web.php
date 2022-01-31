<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
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

Route::get('/', function () {
   return view('welcome');
 });

// Loginn
Route::get('/',[LoginController::class, 'halamanlogin'])-> name('login');
Route::get('/registrasi',[LoginController::class, 'registrasi'])-> name('registrasi');
Route::post('/simpanregistrasi',[LoginController::class, 'simpanregistrasi'])-> name('simpanregistrasi');




// Admin
Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
Route::post('/postlogin',[LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

//kuesioner
Route::get('/data-kuesioner',[AdminController::class, 'datakuesioner'])->name('data-kuesioner');
Route::get('/aspek-pekerjaan',[AdminController::class, 'aspekpekerjaan'])->name('aspek-pekerjaan');
Route::get('/aspek-relasi',[AdminController::class, 'aspekrelasi'])->name('aspek-relasi');
Route::get('/aspek-suasanakerja',[AdminController::class, 'aspeksuasanakerja'])->name('aspek-suasanakerja');
Route::get('/aspek-sarana',[AdminController::class, 'aspeksarana'])->name('aspek-sarana');
Route::get('/aspek-pengembangan',[AdminController::class, 'aspekpengembangan'])->name('aspek-pengembangan');
Route::get('/aspek-pendapatan',[AdminController::class, 'aspekpendapatan'])->name('aspek-pendapatan');
