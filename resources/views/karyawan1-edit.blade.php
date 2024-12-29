@extends('layout.tamplate')

@section('content')
    <form class="card" action="/karyawan1/{{ $detail->id }}/edit" method="POST">
        @csrf
        <div class="card-header">
            <h4>Edit Data Karyawan</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan"
                    value="{{ $detail->nama_karyawan }}">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Default select example">
                    <option disabled>Jenis Kelamin</option>
                    <option value="laki-laki" {{ $detail->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki
                    </option>
                    <option value="perempuan" {{ $detail->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan
                    </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $detail->jabatan }}">
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="/karyawan1" class="btn btn-danger">Kembali</a>
        </div>
    </form>
@endsection
