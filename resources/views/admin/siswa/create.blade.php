<!-- resources/views/admin/siswa/create.blade.php -->

@extends('adminlte::page')

@section('title', 'Tambah Siswa')

@section('content_header')
    <h1>Tambah Siswa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.siswa.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nis">NIS:</label>
                    <input type="text" name="nis" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa:</label>
                    <input type="text" name="nama_siswa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" name="tempat_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas:</label>
                    <input type="text" name="kelas" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="sekolah_id">Sekolah ID:</label>
                    <input type="text" name="sekolah_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mata_pelajaran">Mata Pelajaran:</label>
                    <input type="text" name="mata_pelajaran" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="kelas_id">Kelas ID:</label>
                    <input type="text" name="kelas_id" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@stop
