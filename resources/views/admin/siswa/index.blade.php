@extends('adminlte::page')

@section('title', 'Daftar Siswa')

@section('content_header')
    <h1>Daftar Siswa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Siswa</h3>
            <div class="card-tools">
                <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="siswaTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Tempat Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <!-- Tambah kolom sesuai kebutuhan -->
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswas as $siswa)
                        <tr>
                            <td>{{ $siswa->id }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->nama_siswa }}</td>
                            <td>{{ $siswa->tempat_lahir }}</td>
                            <td>{{ $siswa->jenis_kelamin }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td>{{ $siswa->kelas }}</td>
                            <td>{{ $siswa->mata_pelajaran }}</td>
                            <!-- Tambahkan kolom sesuai kebutuhan -->
                            <td>
                                <!-- Tambahkan tombol aksi seperti edit, hapus, dll. -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@stop

@section('js')
    <script>
        $(function () {
            $('#siswaTable').DataTable();
        });
    </script>
@stop
