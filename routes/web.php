<?php

use App\Http\Controllers\DaftarhadirController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Landingpage1Controller;

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

/*Login*/
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*LandingPage*/
Route::get('/landingpage1', [Landingpage1Controller::class, 'index'])->name('landingpage1');
Route::get('/layanan', [Landingpage1Controller::class, 'layanan'])->name('layanan');
Route::get('/tentang', [Landingpage1Controller::class, 'tentang'])->name('tentang');
Route::get('/kontak', [Landingpage1Controller::class, 'kontak'])->name('kontak');
Route::post('/kontak/submit', [Landingpage1Controller::class, 'submitKontak'])->name('kontak.submit');

/*daftar hadir*/
Route::get('/daftarhadir', [DaftarHadirController::class, 'showForm']);
Route::post('/daftarhadir/submit', [DaftarHadirController::class, 'submitForm'])->name('daftar-hadir.submit');;