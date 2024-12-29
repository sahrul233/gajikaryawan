@extends('layout.tamplate')
@section('content')
    <div class="cand">
        <div class="card-header">
            <h4>Data Jurusan</h4>
            <a href="/jabatan/tambah" class="btn btn-primary">Tambah jurusan</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Jabatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jabatan as $key)
                        <tr>
                            <th scope="row">{{ $key->id }} </th>
                            <td> {{ $key->nama_jabatan }}</td>
                            <td>
                                <a href="/jabatan/{{ $key->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/jabatan/{{ $key->id }}/hapus" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
