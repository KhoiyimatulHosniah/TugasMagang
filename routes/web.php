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
use App\Http\Controllers\DashboardOperatorController;
use App\Http\Controllers\FormDataTamuController;
use App\Http\Controllers\FormJadwalPegawaiController;
use App\Http\Controllers\FormNotulenController;
use App\Http\Controllers\FormKegiatanController;
use App\Http\Controllers\TambahRapatController;
use App\Http\Controllers\JadwalPegawaiController;
use App\Http\Controllers\TambahNotulensiController;
use App\Http\Controllers\TambahTamuController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginOperatorController;
use App\Http\Controllers\TambahjadwalController;
use App\Http\Controllers\TambahOpdController;
use App\Http\Controllers\FormOpdController;
use App\Http\Controllers\LoginRapatController;
use App\Http\Controllers\TampilRapatController;
use App\Http\Controllers\TampiluserController;

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

/*Login Rapat*/
Route::get('/loginRapat', [LoginRapatController::class, 'showLoginRapat'])->name('loginRapat');
Route::post('/loginRapat', [LoginRapatController::class, 'loginRapat']);
Route::post('/logout', [LoginRapatController::class, 'logout'])->name('logout');

/*LandingPage*/
Route::get('/landing2', [Landing2Controller::class, 'index'])->name('landing2');
Route::get('/landing3', [Landing3Controller::class, 'index'])->name('landing3');
Route::get('/landing1', [Landing1Controller::class, 'index'])->name('landing1');

/*daftar hadir*/
Route::get('/daftarhadir', [DaftarhadirController::class, 'tabelDaftarhadir'])->name('daftarhadir');
Route::post('/daftarhadir/submit', [DaftarhadirController::class, 'submitForm'])->name('daftar-hadir.submit');
Route::get('/daftarhadir/edit/{id}', [DaftarhadirController::class, 'edit'])->name('daftarhadir.edit');
Route::get('/daftarhadir/{id}/hapus', [DaftarHadirController::class, 'hapus'])->name('daftarhadir.hapus');
// Form Tamu
Route::get('/form', [TamuController::class, 'index'])->name('form');
Route::get('/tamu/create', [TamuController::class, 'create'])->name('tamu.create');
Route::post('/tamu/store', [TamuController::class, 'store'])->name('tamu.store');
Route::put('/tamu/{id}/update', [TamuController::class, 'update'])->name('tamu.update');
Route::get('/tamu/{id}/edit', [TamuController::class, 'edit'])->name('tamu.edit');



//Dashboard Resepsionis
Route::get('/dashboardTamu', [DashboardTamuController::class, 'index'])->name('dashboardTamu');

//Dashboard Notulensi
Route::get('/dashboardNotulen', [DashboardNotulenController::class, 'index2'])->name('dashboardNotulen');
Route::get('/formNotulen', [FormNotulenController::class, 'tabelNotulensi'])->name('formNotulen');
Route::get('/formNotulen/create', [FormNotulenController::class, 'create'])->name('formNotulen.create');
Route::post('/formNotulen/store', [FormNotulenController::class, 'store'])->name('formNotulen.store');
Route::get('/formNotulen/{id}/hapus', [FormNotulenController::class, 'hapus'])->name('formNotulen.hapus');
Route::get('/formNotulen/edit/{id}', [FormNotulenController::class, 'edit'])->name('formNotulen.edit');
Route::get('/formKegiatan', [FormKegiatanController::class, 'tabelRapat'])->name('formKegiatan');
Route::get('/formKegiatan/create', [FormKegiatanController::class, 'create'])->name('formKegiatan.create');
Route::post('/formKegiatan/store', [FormKegiatanController::class, 'store'])->name('formKegiatan.store');
Route::get('/formKegiatan/{id}/hapus', [FormKegiatanController::class, 'hapus'])->name('formKegiatan.hapus');
Route::put('/formKegiatan/update/{id}', [FormKegiatanController::class, 'update'])->name('formKegiatan.update');
Route::get('/tambahRapat', [TambahRapatController::class, 'index'])->name('tambahRapat');
Route::get('/tambahRapat/create', [TambahRapatController::class, 'create'])->name('tambahRapat.create');
Route::post('/tambahRapat/store', [TambahRapatController::class, 'store'])->name('tambahRapat.store');
Route::get('/tambahNotulensi', [TambahNotulensiController::class, 'index'])->name('tambahNotulensi');
Route::get('/formKegiatan/edit/{id}', [FormKegiatanController::class, 'edit'])->name('formKegiatan.edit');



// tambah notulensi
Route::get('/tambahNotulensi', [TambahNotulensiController::class, 'index'])->name('tambahNotulensi');
Route::get('/tambahNotulensi/create', [TambahNotulensiController::class, 'create'])->name('tambahNotulensi.create');
Route::post('/tambahNotulensi/store', [TambahNotulensiController::class, 'store'])->name('tambahNotulensi.store');



// Data Tamu
Route::get('/datatamu', [DataTamuController::class, 'index'])->name('datatamu');
Route::get('/datatamu', [DataTamuController::class, 'tabelTamu'])->name('datatamu');
Route::get('/datatamu/create', [DataTamuController::class, 'create'])->name('datatamu.create');
Route::post('/datatamu/store', [DataTamuController::class, 'store'])->name('datatamu.store');
Route::get('/datatamu/{id}/hapus', [DataTamuController::class, 'hapus'])->name('datatamu.hapus');
Route::get('/datatamu/edit/{id}', [DataTamuController::class, 'edit'])->name('datatamu.edit');
//Jadwal Pegawai

Route::get('/jadwalPegawai', [JadwalPegawaiController::class, 'index'])->name('jadwalPegawai');
Route::get('/jadwalPegawai/create', [JadwalPegawaiController::class, 'create'])->name('jadwalPegawai.create');
Route::post('/jadwalPegawai/store', [JadwalPegawaiController::class, 'store'])->name('jadwalPegawai.store');
Route::get('/jadwalPegawai', [JadwalPegawaiController::class, 'jadwal'])->name('jadwalPegawai');
Route::get('/jadwalPegawai/edit/{id}', [JadwalPegawaiController::class, 'edit'])->name('jadwalPegawai.edit');

//Tambah Tamu
Route::get('/tambahTamu', [TambahTamuController::class, 'index'])->name('tambahTamu');
Route::get('/tambahTamu/create', [TambahTamuController::class, 'create'])->name('tambahTamu.create');
Route::post('/tambahTamu/store', [TambahTamuController::class, 'store'])->name('tambahTamu.store');

//Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

//tampilrapat
Route::get('/tampilRapat', [TampilRapatController::class, 'tampilrapat'])->name('tampilRapat');
Route::post('/tampilRapat/store', [TampilRapatController::class, 'store'])->name('tampilRapat.store');
Route::post('/tampilRapat', [TampilRapatController::class, 'tampilrapat'])->name('tampilRapat');

//Button Logout
Route::get('/landingpage', function () {
    return view('landingpage');
})->name('landingpage');

//Dashboard Operator
Route::get('/dashboardOperator', [DashboardOperatorController::class, 'index'])->name('dashboardOperator');
Route::get('/formDataTamu', [FormDataTamuController::class, 'tabelTamu'])->name('formDataTamu');
Route::get('/formJadwalPegawai', [FormJadwalPegawaiController::class, 'index'])->name('formJadwalPegawai');
Route::get('/formJadwalPegawai/create', [FormJadwalPegawaiController::class, 'create'])->name('formJadwalPegawai.create');
Route::post('/formJadwalPegawai/store', [FormJadwalPegawaiController::class, 'store'])->name('formJadwalPegawai.store');
Route::get('/formJadwalPegawai/{id}/hapus', [FormJadwalPegawaiController::class, 'hapus'])->name('formJadwalPegawai.hapus');
Route::get('/formJadwalPegawai/edit/{id}', [FormJadwalPegawaiController::class, 'edit'])->name('formJadwalPegawai.edit');
Route::get('/formDataTamu', [FormDataTamuController::class, 'tabelTamu'])->name('formDataTamu');
Route::get('/formJadwalPegawai', [FormJadwalPegawaiController::class, 'index'])->name('formJadwalPegawai');
Route::get('/userregister', [TampiluserController::class, 'tabelregister'])->name('userregister');

//Login Operator
Route::get('/loginOperator', [LoginOperatorController::class, 'showLoginOperator'])->name('loginOperator');
Route::post('/loginOperator', [LoginOperatorController::class, 'login']);
Route::post('/logout', [LoginOperatorController::class, 'logout'])->name('logout');

// tambah Jadwal
Route::get('/tambahJadwal', [tambahJadwalController::class, 'tabelJadwal'])->name('tambahJadwal');
Route::get('/tambahJadwal/create', [tambahJadwalController::class, 'create'])->name('tambahJadwal.create');
Route::post('/tambahJadwal/store', [tambahJadwalController::class, 'store'])->name('tambahJadwal.store');
Route::get('/tambahJadwal/{id}/hapus', [tambahJadwalController::class, 'hapus'])->name('tambahJadwal.hapus');


// tambah opd
Route::get('/formopd', [FormOpdController::class, 'tabelOpd'])->name('formopd');
Route::get('/formopd/create', [FormOpdController::class, 'create'])->name('formopd.create');
Route::post('/formopd/store', [FormOpdController::class, 'store'])->name('formopd.store');
Route::get('/formopd/{id}/hapus', [FormOpdController::class, 'hapus'])->name('formopd.hapus');
Route::get('/formopd/edit/{id}', [FormOpdController::class, 'edit'])->name('formopd.edit');
Route::get('/tambahopd', [TambahOpdController::class, 'tabelOpd'])->name('tambahopd');
Route::get('/tambahopd/create', [TambahOpdController::class, 'create'])->name('tambahopd.create');
Route::put('/tambahopd/{id}', [FormOpdController::class, 'edit'])->name('tambahopd.edit');
Route::post('/tambahopd/store', [TambahOpdController::class, 'store'])->name('tambahopd.store');
Route::get('/tambahopd/{id}/hapus', [TambahOpdController::class, 'hapus'])->name('tambahopd.hapus');


//cetak
Route::get('/printnotulen/{id}', 'NotulensiController@printNotulen')->name('printNotulen');
Route::get('/get_document_data', 'DocumentController@getDocumentData');