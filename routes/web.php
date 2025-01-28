<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\DdcController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\JenisAnggotaController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PengarangController;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\PustakaController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Fitur1Controller;
use App\Http\Controllers\Fitur2Controller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FormatBukuController;

// In routes/web.php
Route::resource('ddc', DdcController::class);

// In routes/web.php
Route::resource('rak', RakController::class);

Route::resource('perpustakaan', PerpustakaanController::class);
Route::resource('jenis-anggota', JenisAnggotaController::class);

Route::get('/jenis-anggota', [JenisAnggotaController::class, 'index'])->name('jenis-anggota.index');
// Resource route otomatis menangani edit dan update
Route::resource('format', FormatBukuController::class);
Route::get('/format-buku', [FormatBukuController::class, 'index'])->name('format-buku.index');
Route::get('/format-buku/create', [FormatBukuController::class, 'create'])->name('format-buku.create');
Route::post('/format-buku', [FormatBukuController::class, 'store'])->name('format-buku.store');
Route::get('/format-buku/{id}/edit', [FormatBukuController::class, 'edit'])->name('format-buku.edit');
Route::put('/format-buku/{id}', [FormatBukuController::class, 'update'])->name('format-buku.update');
Route::delete('/format-buku/{id}', [FormatBukuController::class, 'destroy'])->name('format-buku.destroy');

// Route ke halaman form
Route::get('/ddc', [DDCController::class, 'index'])->name('ddc.index');

// Route untuk menambahkan data
Route::post('/ddc', [DDCController::class, 'store'])->name('ddc.store');

Route::post('/ddc', [DDCController::class, 'store'])->name('ddc.store');
Route::get('/ddc', [DDCController::class, 'index'])->name('ddc.index');
Route::get('/perpustakaan', [LibraryController::class, 'index']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('perpustakaan', PerpustakaanController::class);
Route::resource('fitur1', Fitur1Controller::class);
Route::resource('fitur2', Fitur2Controller::class);
// Tambahkan rute untuk fitur lainnya

Route::get('/rak', [RakController::class, 'index'])->name('rak.index');
Route::get('/rak/create', [RakController::class, 'create'])->name('rak.create');
Route::post('/rak', [RakController::class, 'store'])->name('rak.store');

Route::resource('rak', RakController::class);

Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');

Route::get('/perpustakaan', [PerpustakaanController::class, 'index'])->name('perpustakaan.index');

Route::get('/', [HomeController::class, 'index'])->name('home');

// Anggota Routes
Route::resource('anggota', AnggotaController::class);

// Ddc Routes
Route::resource('ddc', DdcController::class);

// Format Routes
Route::resource('format', FormatController::class);

// JenisAnggota Routes
Route::resource('jenis-anggota', JenisAnggotaController::class);

// Penerbit Routes
Route::resource('penerbit', PenerbitController::class);

// Pengarang Routes
Route::resource('pengarang', PengarangController::class);

// Perpustakaan Routes
Route::resource('perpustakaan', PerpustakaanController::class);

// Profile Routes
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

// Pustaka Routes
Route::resource('pustaka', PustakaController::class);

// Rak Routes
Route::resource('rak', RakController::class);

// Transaksi Routes
Route::resource('transaksi', TransaksiController::class);

Route::get('/penerbit', function () {
    return view('penerbit');
})->name('penerbit');

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
