<?php

use App\Http\Controllers\DivisiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\OprecController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/News', [NewsController::class, 'viewNews'])->name('news');
Route::get('/Angkatan', [GalleryController::class, 'viewAngkatan'])->name('angkatan');
Route::get('/Random', [GalleryController::class, 'viewBebas'])->name('bebas');
Route::get('/ProgramKerja', [GalleryController::class, 'viewProker'])->name('proker');
Route::get('/Oprec', [OprecController::class, 'viewOprec'])->name('oprac');
// Route::get('/Login', [LoginController::class, 'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
