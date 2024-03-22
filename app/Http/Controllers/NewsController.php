<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class NewsController extends Controller
{
    public function viewNews(){
        return view('News.news');
    }

    public function viewDataNews(){
        return view('Admin.News.news');
    }

    public function viewTambah(){
        return view('Admin.News.tambah');
    }

    public function viewEdit(){
        return view('Admin.News.edit');
    }

    public function viewDetail(){
        return view('Admin.News.detail');
    }


    
}
