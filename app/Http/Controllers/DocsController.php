<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function viewDokumentasiMateri(){
        return view('Admin.Docs.dokumentasi-materi');
    }

    public function viewGallery(){
        return view('Admin.Docs.gallery');
    }
}
