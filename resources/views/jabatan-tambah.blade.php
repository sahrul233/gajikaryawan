@extends('layout.tamplate')

@section('content')
<form class="card", action="/jabatan/tambah" method="POST">
    @csrf
    <div class="card-header">
        <h4>Tambah Jabatan</h4>
    </div>
    <div class="card-body">
            <div class="mb-3">
              <label for="formGrubExampleInput" class="form-label">Nama Jabatan</label>
              <input type="text" class="form-control" id="formGrubExampleInput" name="nama_jabatan">
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="/jabatan" class="btn btn-danger">Kembali</a>
            </div>
    </div>
</form>
@endsection
