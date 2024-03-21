<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs; // Sesuaikan dengan model yang Anda gunakan untuk entitas "About Us"

class AboutUsController extends Controller
{
    public function edit()
    {
        $aboutus = AboutUs::first(); // Mengambil data "About Us", misalnya Anda hanya memiliki satu data
        return view('AboutUs.edit', compact('aboutus'));
    }

    // Metode lain jika diperlukan
}

