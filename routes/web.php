<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\OprecController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// LANDING PAGE
Route::get('/News', [NewsController::class, 'viewNews'])->name('news');
Route::get('/Angkatan', [GalleryController::class, 'viewAngkatan'])->name('angkatan');
Route::get('/Random', [GalleryController::class, 'viewBebas'])->name('bebas');
Route::get('/ProgramKerja', [GalleryController::class, 'viewProker'])->name('proker');
Route::get('/Oprec', [OprecController::class, 'viewOprec'])->name('oprac');
// Route::get('/Login', [LoginController::class, 'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ADMIN
Route::get('/DashboardAdmin', [DashboardController::class, 'viewDashboard'])->name('dashboard');

// DOCS 
Route::get('/DataDokumentasiMateri', [DocsController::class, 'viewDokumentasiMateri'])->name('datadokmateri');
Route::get('/DataGallery', [DocsController::class, 'viewGallery'])->name('gallery');

// NEWS 
Route::get('/DataBeritaAcara', [NewsController::class, 'viewBeritaAcara'])->name('databeritaacara');
Route::get('/DataBeritaKegiatan', [NewsController::class, 'viewBeritaKegiatan'])->name('databeritakegiatan');
Route::get('/DataEvent', [NewsController::class, 'viewEvent'])->name('dataevent');

// MAHASISWA
Route::get('/DataAnggotaHimpunan', [MahasiswaController::class, 'viewDataOprec'])->name('dataoprec');
Route::get('/DataOpenRequitment', [MahasiswaController::class, 'viewDataAnggota'])->name('dataanggota');
// Route::get('/DataDivisi', [DivisiController::class, 'viewdivisi'])->name('datadivisi');
