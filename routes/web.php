<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DaftarhadirController;
use App\Http\Controllers\LoginBukuTamuController;
use App\Http\Controllers\Landing1Controller;
use App\Http\Controllers\Landing2Controller;
use App\Http\Controllers\Landing3Controller;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\DashboardTamuController;
use App\Http\Controllers\DataTamuController;
use App\Http\Controllers\LoginNotulensiController;
use App\Http\Controllers\DashboardNotulenController;
use App\Http\Controllers\FormNotulenController;
use App\Http\Controllers\FormKegiatanController;
use App\Http\Controllers\TambahRapatController;
use App\Http\Controllers\JadwalPegawaiController;
use App\Http\Controllers\TambahNotulensiController;
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
Route::get('/landing2', [Landing2Controller::class, 'index'])->name('landing2');
Route::get('/landing3', [Landing3Controller::class, 'index'])->name('landing3');
Route::get('/landing1', [Landing1Controller::class, 'index'])->name('landing1');

/*daftar hadir*/
Route::get('/daftarhadir', [DaftarhadirController::class, 'showForm']);
Route::post('/daftarhadir/submit', [DaftarhadirController::class, 'submitForm'])->name('daftar-hadir.submit');

// Form Tamu
Route::get('/form', [TamuController::class, 'showForm'])->name('form');
Route::post('/form', [TamuController::class, 'processForm']);

//Dashboard Resepsionis
Route::get('/dashboardTamu', [DashboardTamuController::class, 'index'])->name('dashboardTamu');

//Dashboard Notulensi
Route::get('/dashboardNotulen', [DashboardNotulenController::class, 'index2'])->name('dashboardNotulen');
Route::get('/formNotulen', [FormNotulenController::class, 'tabelNotulensi'])->name('formNotulen');
Route::get('/formNotulen/create', [FormNotulenController::class, 'create'])->name('formNotulen.create');
Route::post('/formNotulen/store', [FormNotulenController::class, 'store'])->name('formoNotulen.store');
Route::get('/formNotulen/{id}/hapus', [FormNotulenController::class, 'hapus'])->name('formNotulen.hapus');
Route::get('/formKegiatan', [FormKegiatanController::class, 'tabelRapat'])->name('formKegiatan');
Route::get('/formKegiatan/create', [FormKegiatanController::class, 'create'])->name('formKegiatan.create');
Route::post('/formKegiatan/store', [FormKegiatanController::class, 'store'])->name('formKegiatan.store');
Route::get('/formKegiatan/{id}/hapus', [FormKegiatanController::class, 'hapus'])->name('formKegiatan.hapus');
Route::get('/tambahRapat', [TambahRapatController::class, 'index'])->name('tambahRapat');
Route::get('/tambahNotulensi', [TambahNotulensiController::class, 'index'])->name('tambahNotulensi');

// tambah rapat
Route::get('/formrapat', [TamuController::class, 'showForm'])->name('form');
Route::post('/formrapat', [TamuController::class, 'processForm']);

// tambah notulensi
Route::get('/formnotulensi', [TambahNotulensiController::class, 'showForm'])->name('formnotulensi');
Route::post('/formnotulensi', [TambahNotulensiController::class, 'processForm']);
// Data Tamu
Route::get('/datatamu', [DataTamuController::class, 'tabelTamu'])->name('datatamu');
Route::get('/datatamu/create', [DataTamuController::class, 'create'])->name('datatamu.create');
Route::post('/datatamu/store', [DataTamuController::class, 'store'])->name('datatamu.store');
Route::get('/datatamu/{id}/hapus', [DataTamuController::class, 'hapus'])->name('datatamu.hapus');

//Jadwal Pegawai
Route::get('/jadwalPegawai', [JadwalPegawaiController::class, 'jadwal'])->name('jadwalPegawai');


//Button Logout
Route::get('/landingpage', function () {
    return view('landingpage');
})->name('landingpage');
