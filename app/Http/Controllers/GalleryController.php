<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class GalleryController extends Controller
{
    public function viewGallery(){
        return view('Gallery.angkatan');
    }
}
