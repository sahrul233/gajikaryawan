<?php

namespace App\Http\Controllers;

use App\Models\KaryawanModel;
use App\Models\JabatanModel; 
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $data = [
            'jabatan' => JabatanModel::all(),
            'no' => 1
        ];

        return view('jabatan', $data);
    }

    public function tambah()
    {
        return view('jabatan-tambah');
    }

    public function action_tambah(Request $request)
    {
        $nama_jabatan = $request->nama_jabatan;

        $jabatan = new JabatanModel();
        $jabatan->nama_jabatan = $nama_jabatan;

        $jabatan->save(); // Perbaiki dari $jurusan->save() menjadi $jabatan->save()
        return redirect('/jabatan')->with('success', 'jabatan berhasil ditambah.'); // Perbaiki 'succes' menjadi 'success'
    }

    public function edit($id)
    {
        $data = [
            'detail' => JabatanModel::findOrFail($id)
        ];
        return view('jabatan-edit', $data);
    }

    public function action_edit($id, Request $request)
    {
        $nama_jabatan = $request->nama_jabatan;
        $jabatan = JabatanModel::findOrFail($id);
        $jabatan->update([
            'nama_jabatan' => $nama_jabatan
        ]);
        return redirect('/jabatan')->with('success', 'jabatan berhasil diedit.'); // Perbaiki 'succes' menjadi 'success'
    }

    public function hapus($id)
    {
        $jabatan = JabatanModel::findOrFail($id);
        $jabatan->delete();

        return back()->with('success', 'jabatan berhasil dihapus.'); // Perbaiki 'succes' menjadi 'success'
    }
}
