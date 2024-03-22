<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs; // Sesuaikan dengan model yang Anda gunakan untuk entitas "About Us"

class AboutUsController extends Controller
{
    public function viewAboutUs()
    {
        return view('AboutUs.abousus');
    }
}
