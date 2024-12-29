@extends('layout.tamplate')

@section('content')
    <form class="card", action="/karyawan1/tambah" method="POST">
        @csrf
        <div class="card-header">
            <h4>Tambah Data Karyawan</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="formGrubExampleInput" class="form-label">Nama Karyawan</label>
                <input type="text" class="form-control" id="formGrubExampleInput" name="nama_karyawan">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <option selected>Jenis Kelamin</option>
                    <option value="laki-laki">laki-laki</option>
                    <option value="perempuan">perempuan</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="formGrubExampleInput" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="formGrubExampleInput" name="jabatan">
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="/karyawan1" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
@endsection
