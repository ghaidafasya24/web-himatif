<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function viewDataOprec()
    {
        return view('Admin.Mahasiswa.DataOprec.data-oprec');
    }

    public function viewDataAnggota()
    {
        return view('Admin.Mahasiswa.DataAnggota.data-anggota');
    }
}
