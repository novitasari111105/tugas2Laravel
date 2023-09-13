<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\Bukucontroller;
use App\Http\Controllers\PetugasController;
Use App\Http\Controllers\PeminjamanController;
Use APP\Http\Controllers\PengembalianController;
Use APP\Http\Controllers\RakController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('template.master');
});

//Route::get('/', [AuthorController::class, 'index'])->name('index');
Route::get('/Anggota', [AnggotaController::class, 'create'])->name('Anggota');
Route::get('/Buku', [BukuController::class, 'create'])->name('Buku');
Route::get('/Petugas', [PetugasController::class, 'create'])->name('Petugas');
Route::get('/Peminjaman', [PeminjamanController::class, 'create'])->name('Peminjaman');
Route::get('/Pengembalian', [PengembalianController::class, 'create'])->name('Pengembalian');
Route::get('/Rak', [RakController::class, 'create'])->name('Rak');