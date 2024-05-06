<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;

class AnakController extends Controller
{
    public function data()
    {
        $data = Anak::all();
        return view('content.data.Anak', compact('data'));
    }
    public function tambahData(Request $request)
    {
        $validateData = $request->validate([
            'namaLengkap' => 'required|max:255',
            'jenisKelamin' => 'required',
            'umur' => 'required',
            'noKk' => 'required',
            'alamat' => 'required|max:255',
            'namaIbu' => 'required|max:255',
            'tb' => 'required',
            'bb' => 'required',
            'hasil' => 'required',
        ]);
        Anak::create($validateData);
        $request->session()->flash('create', 'Tambah Data Anak Berhasil');
        return redirect()->route('data.anak');
    }
    public function updateData(Request $request, Anak $id)
    {
        $validateData = $request->validate([
            'namaLengkap' => 'required',
            'jenisKelamin' => 'required',
            'umur' => 'required',
            'noKk' => 'required',
            'alamat' => 'required',
            'namaIbu' => 'required',
            'tb' => 'required',
            'bb' => 'required',
            'hasil' => 'required',
        ]);
        $id->update($validateData);
        $request->session()->flash('update', 'Update Data Anak Berhasil');
        return redirect()->route('data.anak');
    }
    public function hapusData(Request $request, Anak $id)
    {
        $id->delete();
        $request->session()->flash('delete', 'Hapus Jadwal Posyandu Berhasil');
        return redirect()->route('jadwal');
    }
}
