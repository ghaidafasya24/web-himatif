<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class NewsController extends Controller
{
    public function viewNews(){
        return view('News.news');
    }
}
