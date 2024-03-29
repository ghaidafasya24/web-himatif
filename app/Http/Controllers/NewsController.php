<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class NewsController extends Controller
{
    public function viewNews(){
        return view('News.news');
    }

    public function viewDataNews(){
        $news = News::all();
        return view('Admin.News.news', compact('news'));
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

    public function postTambahNews(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul_berita' => 'required|string|max:100',
            'deskripsi' => 'required|string|max:400',
            'tanggal_publish' => 'required|max:100',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $image = $request->file('gambar');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/news/'), $imageName);

        $newsData = [
            'judul_berita' => $request->judul_berita,
            'deskripsi' => $request->deskripsi,
            'tanggal_publish' => $request->tanggal_publish,
            'gambar' => $imageName,
        ];
        // dd($newsData);

        News::create($newsData);

        return redirect()->route('datanews')->with('success', 'news added successfully.');
    }



}
