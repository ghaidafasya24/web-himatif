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
use App\Http\Controllers\AboutUsController;

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
// Route::get('/AboutUs', function () {
//     return view('aboutus');
// });
// LANDING PAGE
Route::get('/News', [NewsController::class, 'viewNews'])->name('news');
Route::get('/Angkatan', [GalleryController::class, 'viewAngkatan'])->name('angkatan');
Route::get('/Random', [GalleryController::class, 'viewBebas'])->name('bebas');
Route::get('/ProgramKerja', [GalleryController::class, 'viewProker'])->name('proker');
Route::get('/Oprec', [OprecController::class, 'viewOprec'])->name('oprac');
Route::get('/AboutUs', [AboutUsController::class, 'viewAboutUs'])->name('aboutus');
// Route::get('/Login', [LoginController::class, 'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ADMIN
Route::get('/DashboardAdmin', [DashboardController::class, 'viewDashboard'])->name('dashboard');

// DOCS 
Route::get('/DataDokumentasiMateri', [DocsController::class, 'viewDokumentasiMateri'])->name('datadokmateri');
Route::get('/TambahDataDokumentasiMateri', [DocsController::class, 'viewTambahDokumentasiMateri'])->name('tambahdatadokmateri');
Route::get('/EditDataDokumentasiMateri', [DocsController::class, 'viewEditDokumentasiMateri'])->name('editdatadokmateri');
Route::get('/DetailDataDokumentasiMateri', [DocsController::class, 'viewDetailDokumentasiMateri'])->name('detaildatadokmateri');


Route::get('/DataGallery', [DocsController::class, 'viewGallery'])->name('gallery');
Route::get('/TambahDataGallery', [DocsController::class, 'viewTambahGallery'])->name('tambahdatagallery');
Route::post('/PostDataGallery', [DocsController::class, 'postTambahGallery'])->name('postdatagallery');
Route::get('/EditDataGallery/{id}', [DocsController::class, 'viewEditGallery'])->name('editdatagallery');
Route::put('/EditDataGalleryPut/{id}', [DocsController::class, 'EditGallery'])->name('puteditdatagallery');
Route::get('/DetailDataGallery/{id}', [DocsController::class, 'viewDetailGallery'])->name('detaildatagallery');
Route::delete('/DeleteDataGallery/{id}', [DocsController::class, 'deleteDetailGallery'])->name('deletedatagallery');

// NEWS 
Route::get('/DataNews', [NewsController::class, 'viewDataNews'])->name('datanews');
Route::get('/TambahDataNews', [NewsController::class, 'viewTambah'])->name('tambahdatanews');
Route::get('/EditDataNews', [NewsController::class, 'viewEdit'])->name('editdatanews');
Route::get('/DetailDataNews', [NewsController::class, 'viewDetail'])->name('detaildatanews');


// MAHASISWA
Route::get('/DataAnggotaHimpunan', [MahasiswaController::class, 'viewDataAnggota'])->name('dataanggota');
Route::get('/TambahDataAnggotaHimpunan', [MahasiswaController::class, 'viewTambahDataAnggota'])->name('tambahdataanggota');
Route::get('/EditDataAnggotaHimpunan', [MahasiswaController::class, 'viewEditDataAnggota'])->name('editdataanggota');

Route::get('/DataOpenRequitment', [MahasiswaController::class, 'viewDataOprec'])->name('dataoprec');
Route::get('/EditDataOpenRequitment', [MahasiswaController::class, 'viewEditDataOprec'])->name('editdataoprec');
Route::get('/DetailDataOpenRequitment', [MahasiswaController::class, 'viewDetailDataOprec'])->name('detaildataoprec');
// Route::get('/DataDivisi', [DivisiController::class, 'viewdivisi'])->name('datadivisi');
