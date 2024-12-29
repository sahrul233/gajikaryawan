<?php

namespace App\Http\Controllers;
use App\Models\JabatanModel;
use App\Models\KaryawanModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKaryawan = KaryawanModel::count();
        $jumlahjabatan = JabatanModel::count();
        $lakiLaki = KaryawanModel::where('jenis_kelamin', 'laki-laki')->count();
        $perempuan = KaryawanModel::where('jenis_kelamin', 'perempuan')->count();

        return view('dashboard', [
            'totalKaryawan' => $totalKaryawan,
            'jumlahjabatan' => $jumlahjabatan,
            'lakilaki' => $lakiLaki,
            'perempuan' => $perempuan
        ]);
    }
}
