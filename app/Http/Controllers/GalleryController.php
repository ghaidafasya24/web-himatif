<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class GalleryController extends Controller
{

    // function untuk menampilkan menu bebas angkatan pada gallery
    public function viewBebas(){
        return view('Gallery.bebas');
    }

    // function untuk menampilkan menu proker pada gallery
    public function viewProker(){
        return view('Gallery.proker');
    }

}
