<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class NewsController extends Controller
{
    public function viewNews(){
        return view('News.news');
    }

    public function viewBeritaAcara(){
        return view('Admin.News.berita-acara');
    }
    
    public function viewBeritaKegiatan(){
        return view('Admin.News.berita-kegiatan');
    }

    public function viewEvent(){
        return view('Admin.News.event');
    }

    
}
