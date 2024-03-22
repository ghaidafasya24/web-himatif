<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function viewDokumentasiMateri(){
        return view('Admin.Docs.DokumentasiMateri.dokumentasi-materi');
    }
    public function viewTambahDokumentasiMateri(){
        return view('Admin.Docs.DokumentasiMateri.tambah');
    }
    public function viewEditDokumentasiMateri(){
        return view('Admin.Docs.DokumentasiMateri.edit');
    }
    public function viewDetailDokumentasiMateri(){
        return view('Admin.Docs.DokumentasiMateri.detail');
    }

    
    public function viewGallery(){
        return view('Admin.Docs.Gallery.gallery');
    }

    public function viewTambahGallery(){
        return view('Admin.Docs.Gallery.tambah');
    }

    public function viewEditGallery(){
        return view('Admin.Docs.Gallery.edit');
    }

    public function viewDetailGallery(){
        return view('Admin.Docs.Gallery.edit');
    }
}
