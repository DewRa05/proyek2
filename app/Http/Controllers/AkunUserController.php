<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunUser;

class AkunUserController extends Controller
{
    public function akunuser()
    {
        $akun = AkunUser::all();
        return view('content.auth.akunuser', compact('akun'));
    }
    public function tambahAkunuser(Request $request)
    {
        $validateData = $request->validate([
            'namaLengkap' => 'required',
            'username' => 'required',
            'nik' => 'required',
            'noKK' => 'required',
            'email' => 'required|email|unique:akunuser,email',
            'password' => 'required',

        ]);
        AkunUser::create($validateData);
        $request->session()->flash('create', 'Tambah Akun User Berhasil');
        return redirect()->route('akunuser');
    }
    public function updateAkunuser(Request $request,AkunUser $id)
    {
        $validateData = $request->validate([
            'namaLengkap' => 'required',
            'username' => 'required',
            'nik' => 'required',
            'noKK' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $id->update($validateData);
        $request->session()->flash('update', 'Update Akun User Berhasil');
        return redirect()->route('akunuser');
    }
    public function hapusAkunuser(Request $request, AkunUser $id)
    {
        $id->delete();
        $request->session()->flash('delete', 'Hapus Akun User Berhasil');
        return redirect()->route('akunuser');
    }
}
