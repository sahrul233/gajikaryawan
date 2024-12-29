<?php

namespace App\Http\Controllers;
use App\Models\KaryawanModel;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $data = [
            'karyawan1' => KaryawanModel::get()
        ];
        return view('karyawan1', $data);
    }

    public function tambah()
    {
        return view('karyawan1-tambah');
    }

    public function action_tambah(Request $request)
    {
        $karyawan1 = new KaryawanModel();
        $karyawan1->nama_karyawan = $request->nama_karyawan;
        $karyawan1->jenis_kelamin = $request->jenis_kelamin;
        $karyawan1->jabatan = $request->jabatan;

        $karyawan1->save();
        return redirect('/karyawan1')->with('success', 'Data Karyawan berhasil ditambah.');
    }

    public function edit($id)
    {
        $data = [
            'detail' => KaryawanModel::findOrFail($id)
        ];
        return view('karyawan1-edit', $data);
    }

    public function action_edit($id, Request $request)
    {
        $karyawan1 = KaryawanModel::findOrFail($id);
        $karyawan1->update([
            'nama_karyawan' => $request->nama_karyawan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
        ]);
        return redirect('/karyawan1')->with('success', 'Data karyawan berhasil diedit.');
    }
    public function hapus($id)
    {
        $karyawan1 = KaryawanModel::findOrFail($id);
        $karyawan1->delete();

        return back()->with('success', 'Data Karyawan berhasil dihapus.');
    }
}
