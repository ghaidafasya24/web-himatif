<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocsController extends Controller
{
    public function viewDokumentasiMateri()
    {
        return view('Admin.Docs.DokumentasiMateri.dokumentasi-materi');
    }
    public function viewTambahDokumentasiMateri()
    {
        return view('Admin.Docs.DokumentasiMateri.tambah');
    }
    public function viewEditDokumentasiMateri()
    {
        return view('Admin.Docs.DokumentasiMateri.edit');
    }
    public function viewDetailDokumentasiMateri()
    {
        return view('Admin.Docs.DokumentasiMateri.detail');
    }


    public function viewGallery()
    {
        $gallery = Gallery::all();
        return view('Admin.Docs.Gallery.gallery', compact('gallery'));
    }

    public function viewTambahGallery()
    {
        return view('Admin.Docs.Gallery.tambah');
    }

    public function viewEditGallery($id)
    {
        $detail = Gallery::findOrFail($id);
        return view('Admin.Docs.Gallery.edit', compact('detail'));
    }

    public function viewDetailGallery($id)
    {
        $detail = Gallery::findOrFail($id);
        return view('Admin.Docs.Gallery.detail', compact('detail'));
    }

    public function postTambahGallery(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul_gallery' => 'required|string|max:100',
            'deskripsi' => 'required|string|max:400',
            'tanggal_publish' => 'required|max:100',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $image = $request->file('gambar');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/gallery/'), $imageName);

        $galleryData = [
            'judul_gallery' => $request->judul_gallery,
            'deskripsi' => $request->deskripsi,
            'tanggal_publish' => $request->tanggal_publish,
            'gambar' => $imageName,
        ];

        Gallery::create($galleryData);

        return redirect()->route('gallery')->with('success', 'Gallery added successfully.');
    }

    public function EditGallery(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'judul_gallery' => 'required|string|max:100',
            'deskripsi' => 'required|string|max:400',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('gambar')) {

            if ($gallery->gambar) {
                Storage::delete('img/gallery/' . $gallery->gambar);
            }

            // Mengupload gambar baru
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/gallery'), $imageName);

            // Mengupdate data pro$gallery dengan gambar baru
            $gallery->update([
                'gambar' => $imageName,
            ]);
        }

        $gallery->update([
            'judul_gallery' => $request->judul_gallery,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('gallery')->with('success', 'Gallery update successfully.');
    }

    public function deleteDetailGallery($id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->gambar) {
            Storage::delete('img/gallery/' . $gallery->gambar);
        }

        $gallery->delete();

        return redirect()->route('gallery')->with('success', 'Gallery deleted successfully.');
    }
}
