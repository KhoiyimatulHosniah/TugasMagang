<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DaftarhadirController;
use App\Http\Controllers\LoginBukuTamuController;
use App\Http\Controllers\Landingpage1Controller;
use App\Http\Controllers\Landingpage2Controller;
use App\Http\Controllers\Landingpage3Controller;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\DashboardTamuController;
use App\Http\Controllers\LoginNotulensiController;



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

/*Login Buku Tamu*/
Route::get('/login', [LoginBukuTamuController::class, 'showLoginAdmin'])->name('login');
Route::post('/login', [LoginBukuTamuController::class, 'login']);
Route::post('/logout', [LoginBukuTamuController::class, 'logout'])->name('logout');

/*Login Notulensi*/
Route::get('/loginNotulensi', [LoginNotulensiController::class, 'showLoginNotulensi'])->name('loginNotulensi');
Route::post('/loginNotulensi', [LoginNotulensiController::class, 'login']);
Route::post('/logout', [LoginNotulensiController::class, 'logout'])->name('logout');

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

//Dashboard Resepsionis
Route::get('/dashboardTamu', [DashboardTamuController::class, 'index'])->name('dashboardTamu');

