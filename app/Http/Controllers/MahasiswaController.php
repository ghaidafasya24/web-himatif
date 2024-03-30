<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function viewDataOprec()
    {
        return view('Admin.Mahasiswa.DataOprec.data-oprec');
    }
    public function viewEditDataOprec()
    {
        return view('Admin.Mahasiswa.DataOprec.edit');
    }
    public function viewDetailDataOprec()
    {
        return view('Admin.Mahasiswa.DataOprec.detail');
    }


    public function viewDataAnggota()
    {
        return view('Admin.Mahasiswa.DataAnggota.data-anggota');
    }

    public function viewTambahDataAnggota()
    {

        return view('Admin.Mahasiswa.DataAnggota.tambah');
    }

    public function viewEditDataAnggota()
    {
        return view('Admin.Mahasiswa.DataAnggota.edit');
    }
}
