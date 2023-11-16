<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DaftarhadirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Landingpage1Controller;
use App\Http\Controllers\Landingpage2Controller;
use App\Http\Controllers\Landingpage3Controller;
use App\Http\Controllers\TamuController;


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
Route::get('/landingpage2', [Landingpage2Controller::class, 'index2'])->name('landingpage2');
Route::get('/landingpage3', [Landingpage3Controller::class, 'index3'])->name('landingpage3');

/*daftar hadir*/
Route::get('/daftarhadir', [DaftarhadirController::class, 'showForm']);
Route::post('/daftarhadir/submit', [DaftarhadirController::class, 'submitForm'])->name('daftar-hadir.submit');


Route::get('/layanan', [Landingpage1Controller::class, 'layanan'])->name('layanan');
Route::get('/tentang', [Landingpage1Controller::class, 'tentang'])->name('tentang');
Route::get('/kontak', [Landingpage1Controller::class, 'kontak'])->name('kontak');
Route::post('/kontak/submit', [Landingpage1Controller::class, 'submitKontak'])->name('kontak.submit');

// Form Tamu
Route::get('/form', [TamuController::class, 'showForm'])->name('form');
Route::post('/form', [TamuController::class, 'processForm']);
