<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class GalleryController extends Controller
{

    // function untuk menampilkan menu bebas angkatan pada gallery
    public function viewBebas()
    {
        $gallery = Gallery::all();
        return view('Gallery.bebas', compact('gallery')); //gallery
    }

    // function untuk menampilkan menu proker pada gallery
    public function viewProker()
    {
        return view('Gallery.proker'); //dokumentasi materi
    }
}
