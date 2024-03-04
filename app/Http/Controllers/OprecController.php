<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class OprecController extends Controller
{
    public function viewOprec(){
        return view('Oprec.oprac');
    }
}
