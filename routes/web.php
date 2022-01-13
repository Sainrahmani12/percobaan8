<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\ImageController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\RentalController::class, 'index'])->name('dashboard');
Route::get('/datamobil', [App\Http\Controllers\RentalController::class, 'datamobil'])->name('datamobil');
Route::get('/jadwal', [App\Http\Controllers\RentalController::class, 'jadwal'])->name('jadwal');
Route::get('/pembayaran', [App\Http\Controllers\RentalController::class, 'pembayaran'])->name('pembayaran');
Route::post('/tambahdata', [App\Http\Controllers\RentalController::class, 'store'])->name('tambahdata');
Route::get('/ganti/{id}', [App\Http\Controllers\RentalController::class, 'edit'])->name('edit');
Route::get('/creategallery', [App\Http\Controllers\RentalController::class, 'creategallery'])->name('creategallery');
Route::get('/tagihan', [App\Http\Controllers\RentalController::class, 'tagihan'])->name('tagihan');



// CRUD DATA MOBIL
Route::get('/create', [App\Http\Controllers\RentalController::class, 'create'])->name('create');
Route::put('/update', [App\Http\Controllers\RentalController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [App\Http\Controllers\RentalController::class, 'destroy'])->name('delete');
Route::get('/about', [App\Http\Controllers\RentalController::class, 'about'])->name('about');
Route::put('/editmobil/{id}', [App\Http\Controllers\RentalController::class, 'update'])->name('editmobil');

// CRUD IDENTITAS
Route::get('/identitas', [App\Http\Controllers\IdentitasController::class, 'index'])->name('identitas');
Route::get('/tambahid', [App\Http\Controllers\IdentitasController::class, 'create'])->name('createidentity');
Route::post('/dataid', [App\Http\Controllers\IdentitasController::class, 'store'])->name('dataid');
Route::delete('/hapus/{id}', [App\Http\Controllers\IdentitasController::class, 'destroy'])->name('hapus');
Route::put('/ngedit/{id}', [App\Http\Controllers\IdentitasController::class, 'update'])->name('ngedit');


// CRUD SUPIR

Route::get('/datasupir', [App\Http\Controllers\SupirController::class, 'index'])->name('datasupir');
Route::get('/nambahsupir', [App\Http\Controllers\SupirController::class, 'create'])->name('nambahsupir');
Route::post('/addsupir', [App\Http\Controllers\SupirController::class, 'store'])->name('addsupir');
Route::put('/editsupir/{id}', [App\Http\Controllers\SupirController::class, 'update'])->name('editsupir');
Route::delete('/hapusupir/{id}', [App\Http\Controllers\SupirController::class, 'destroy'])->name('hapusupir');


// USER
Route::get('/landing', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/pemesanan', [App\Http\Controllers\UserController::class, 'pesan'])->name('pemesanan');
Route::post('/pesanid', [App\Http\Controllers\UserController::class, 'store'])->name('pesanid');


Route::resource('images', ImageController::class);