<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class DivisiController extends Controller
{
    public function view(){
        return view('Divisi.divisi');
    }
}
