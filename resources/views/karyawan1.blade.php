@extends('layout.tamplate')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Data Karyawan</h4>
            <a href="/karyawan1/tambah" class="btn btn-primary">Tambah Karyawan</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp <!-- Inisialisasi variabel $no -->
                    @foreach ($karyawan1 as $key)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $key->nama_karyawan }}</td>
                            <td>{{ $key->jenis_kelamin }}</td>
                            <td>{{ $key->jabatan }}</td>
                            <td>
                                <a href="/karyawan1/{{ $key->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/karyawan1/{{ $key->id }}/hapus" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
