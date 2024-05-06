<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function informasi()
    {
        $info = Informasi::all();
        return view('content.data.informasiberita', compact('info'));
    }
    public function tambahInformasi(Request $request)
    {
        $validateData = $request->validate([
            'tanggal' => 'required|date',
            'jam' => 'required|dateformat:H:i',
            'tempat' => 'required',
            'penulis' => 'required',
            'berita' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->gambar->extension();  
        $request->gambar->move(public_path('img'), $imageName);
        Informasi::create([
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'tempat' => $request->tempat,
            'penulis' => $request->penulis,
            'berita' => $request->berita,
            'gambar' => $imageName,
        ]);
        $request->session()->flash('create', 'Tambah Berita Berhasil');
        return redirect()->route('informasi');
    }
}
