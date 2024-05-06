<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function jadwal()
    {
        $jadwal = Jadwal::all();
        return view('content.data.Jadwal', compact('jadwal'));
    }
    public function tambahJadwal(Request $request)
    {
        $validateData = $request->validate([
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'acara' => 'required|min:2|max:50',
            'tempat'=> 'required|min:2|max:255',
        ]);
        jadwal::create($validateData);
        $request->session()->flash('create', 'Tambah Jadwal Posyandu Berhasil');
        return redirect()->route('jadwal');
    }
    public function updateJadwal(Request $request, Jadwal $id)
    {
        $validateData = $request->validate([
            'tanggal' => 'required|date',
            'jam' => 'required',
            'acara' => 'required',
            'tempat'=> 'required',
        ]);

        $id->update($validateData);
        $request->session()->flash('update', 'Update Jadwal Posyandu Berhasil');
        return redirect()->route('jadwal');
    }
    public function hapusJadwal(Request $request, Jadwal $id)
    {
        $id->delete();
        $request->session()->flash('delete', 'Hapus Jadwal Posyandu Berhasil');
        return redirect()->route('jadwal');
    }
}
